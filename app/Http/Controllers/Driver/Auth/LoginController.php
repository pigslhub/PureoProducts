<?php

namespace App\Http\Controllers\Driver\Auth;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/driver';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:driver')->except('logout');
    }

    public function showLoginForm()
    {
    
        return view('driver.auth.login');
    }

    public function login(Request $request)
    {


        $driver = Driver::where(['email' => $request->email])->first();
        
        if (!$driver){
            return redirect()->back()->with('error', 'Access Denied! Invalid selection or username and password');
        }

         $request->validate([
             'email' => 'required|string',
             'password' => 'required|string'
         ]);

        if($driver->status == 1)
        {
            if(Auth::guard('driver')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
               
                return redirect()->route('driver.dashboard');
            }
            return redirect()->back()->withInput($request->only('email', 'remember'));
            
        } else return redirect()->back()->with('warning', 'Your account is de-activated.');
    }

    protected function guard()
    {
        return Auth::guard('driver');
    }
    
    protected function loggedOut(Request $request)
    {
        return redirect(route('driver.login'));
    }
}
