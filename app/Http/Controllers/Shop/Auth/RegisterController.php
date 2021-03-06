<?php

namespace App\Http\Controllers\Shop\Auth;

use App\Shop;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest:shop');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:shops'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'commission' => ['required'],
            'shop_type_id' => ['required'],
            'zip_code' => ['required'],
        ]);
    }

    public function showRegistrationForm()
    {
        return view('shop.auth.register');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($shop = $this->create($request->all())));

        $this->guard()->login($shop);

        return $this->registered($request, $shop)
            ?: redirect($this->redirectPath());
    }

    protected function create(array $data)
    {
        return Shop::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'zip_code' => $data['zip_code'],
            'shop_type_id' => $data['shop_type_id'],
            'commission' => $data['commission'],
        ]);
    }

    protected function registered(Request $request, $shop)
    {
        return redirect(route('shopPOSs.index'))->with('success', 'Shop Registered Successfully');
    }

    protected function guard()
    {
        return Auth::guard('shop');
    }
}
