<?php

namespace App\Http\Controllers\API\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
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
        $this->middleware('auth:api_customer', ['except' => ['login', 'register']]);
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
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $customer = Customer::create($request->except('password'));

        $customer->update([
            'password' => bcrypt($request->password),
        ]);

        $token = $this->guard()->login($customer);
        return $this->respondWithToken($token);

        // return new CustomerResource(['customer' => $customer]);

    }

    function profile(Request $request)
    {
            if($request->password == '')
            {
                $customer = Customer::where('id',$request->customer_id)->first();
                $customer->update($request->except('password'));
                if($customer)
                {
                  return response()->json(["profile" => "update"]);
                }else
                {
                    return response()->json(["profile" => "Profile Not Updated"]);
                }
            }else
            {

              $customer = Customer::where('id',$request->customer_id)->first();
              $customer->update($request->except('password'));
              $customer->update([
                  "password" => Hash::make($request->password)
                  ]);

                if($customer)
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
        $customer = Customer::where('id',$request->customer_id)->first();
        if($customer)
        {
            return response()->json(["customer" => $customer]);
        }else
        {
            return response()->json(["customer" => []]);
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
            'customer' => new CustomerResource(auth('api_customer')->user())
        ]);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard
     */
    public function guard()
    {
        return Auth::guard('api_customer');
    }
}
