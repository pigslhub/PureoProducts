<?php

namespace App\Http\Controllers\API\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Mail\VerificationCode;
use App\VerifyCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function sendCodeToEmail(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();
        if ($customer)
        {
            $str = Str::random(6);
            $code = VerifyCode::create([
                'customer_id' => $customer->id,
                'email' => $customer->email,
                'code' => $str,
            ]);
            Mail::to($customer)->send(new VerificationCode($str,$customer));
            return response()->json(['code' => $str]);
        }else
            return response()->json(['email' => 'Customer not found.']);
    }
    
    public function verifyCode(Request $request)
    {
        $row = VerifyCode::where('code', $request->code)->first();
        if ($row)
        {
            $row->delete();
            return response()->json(['verified' => 'yes']);
        }else
            return response()->json(['verified' => 'no']);
    }
    
    public function passwordReset(Request $request)
    {
        $customer = Customer::where('email', $request->email)->first();
        if ($customer)
        {
            $customer->update([
                'password' => Hash::make($request->password),
                ]);
            return response()->json(['reset' => 'yes']);
        }else
            return response()->json(['reset' => 'no']);
    }
}
