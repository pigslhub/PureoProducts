<?php

namespace App\Http\Controllers\Shop\Auth;

use App\Http\Controllers\Controller;
use App\Shop;
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
    protected $redirectTo = '/shop';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:shop')->except('logout');
    }

    public function showLoginForm()
    {
        return view('shop.auth.login');
    }

    public function login(Request $request)
    {
        $shop = Shop::where(['email' => $request->email])->first();

        if (!$shop) {
            return redirect()->back()->with('error', 'Access Denied! Invalid selection or username and password');
        }

        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        if ($shop->status == 1) {
            if (Auth::guard('shop')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                return redirect()->route('shopPOSs.index');
            }
            return redirect()->back()->withInput($request->only('email', 'remember'));
        } else return redirect()->back()->with('warning', 'Your account is de-activated.');
    }

    protected function guard()
    {
        return Auth::guard('shop');
    }

    protected function loggedOut(Request $request)
    {
        return redirect(route('shop.login'));
    }
}
