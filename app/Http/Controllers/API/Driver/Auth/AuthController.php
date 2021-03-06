<?php

namespace App\Http\Controllers\API\Driver\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\DriverResource;
use App\Models\Driver;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api_driver', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT token via given credentials.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($token = $this->guard()->attempt($credentials)) {
            return $this->respondWithToken($token);
        }

        return response()->json(['error' => 'These credentials do not match our records'], 401);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $driver = Driver::create($request->except('password'));

        $driver->update([
            'password' => bcrypt($request->password),
        ]);

        $token = $this->guard()->login($driver);
        return $this->respondWithToken($token);

        // return new DriverResource(['driver' => $driver]);

    }

    function profile(Request $request)
    {

            if($request->password == '')
            {

                $driver = Driver::where('id',$request->driver_id)->first();
                $driver->update($request->except('password'));
                if($driver)
                {
                   return response()->json(["profile" => "update"]);
                }else
                {
                    return response()->json(["profile" => "Profile Not Updated"]);
                }
            }else
            {

              $driver = Driver::where('id',$request->driver_id)->first();
              $driver->update($request->except('password'));
              $driver->update([
                  "password" => Hash::make($request->password)
                  ]);
                if($driver)
                {
                   return response()->json(["profile" => "update"]);
                }else
                {
                    return response()->json(["profile" => "Profile Not Updated"]);
                }
            }
    }

    function viewProfile(Request $request)
    {
        $driver = Driver::where('id',$request->driver_id)->first();
        if($driver)
        {
            return response()->json(["driver" => $driver]);
        }else
        {
            return response()->json(["driver" => []]);
        }
    }

    /**
     * Get the authenticated User
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json($this->guard()->user());
    }

    /**
     * Log the user out (Invalidate the token)
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        $this->guard()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken($this->guard()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $this->guard()->factory()->getTTL() * 3600,
            'driver' => new DriverResource(auth('api_driver')->user())
        ]);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard
     */
    public function guard()
    {
        return Auth::guard('api_driver');
    }

    public function updateFcmToken(Request $request)
    {
        $driver = Driver::where('id', $request->driver_id)->first();
        $res = $driver->update([
            "fcm_token" => $request->fcm_token
        ]);
        if($res)
        {
            return response()->json(['added' => "yes"]);
        }
        else{
            return response()->json(['added' => "no"]);
        }

    }
}
