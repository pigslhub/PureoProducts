<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
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
    protected $redirectTo = '/customer';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
    }

    public function showLoginForm()
    {

        return view('customer.auth.login');
    }

    public function login(Request $request)
    {


        $customer = Customer::where(['email' => $request->email])->first();

        if (!$customer){
            return redirect()->back()->with('error', 'Access Denied! Invalid username and password');
        }

         $request->validate([
             'email' => 'required|string',
             'password' => 'required|string'
         ]);

        if($customer->status == 1)
        {
            if(Auth::guard('customer')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){

                return redirect()->route('customer.dashboard');
            }
            return redirect()->back()->withInput($request->only('email', 'remember'));

        } else return redirect()->back()->with('warning', 'Your account is de-activated.');
    }

    protected function guard()
    {
        return Auth::guard('customer');
    }

    protected function loggedOut(Request $request)
    {
        return redirect(route('customer.login'));
    }
}
