<?php

namespace App\Http\Controllers\API\Driver\Auth;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Mail\VerificationCodeDriver;
use App\VerifyCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function sendCodeToEmail(Request $request)
    {
        $driver = Driver::where('email', $request->email)->first();
        if ($driver)
        {
            $str = Str::random(6);
            $code = VerifyCode::create([
                'driver_id' => $driver->id,
                'email' => $driver->email,
                'code' => $str,
            ]);
            Mail::to($driver)->send(new VerificationCodeDriver($str,$driver));
            return response()->json(['code' => $str]);
        }else
            return response()->json(['email' => 'Driver not found.']);
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
        $Driver = Driver::where('email', $request->email)->first();
        if ($Driver)
        {
            $Driver->update([
                'password' => Hash::make($request->password),
                ]);
            return response()->json(['reset' => 'yes']);
        }else
            return response()->json(['reset' => 'no']);
    }
}
