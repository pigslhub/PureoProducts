<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('shop.profile.index', compact('user'));
    }

    public function edit()
    {
        $user = auth('shop')->user();
        return view('shop.profile.edit', compact('user'));
    }
    public function update(Request $request)
    {
        $user = auth('shop')->user();
        $user->update($request->except('icon', 'password'));
        if($request->password != null || $request->password != "")
        {
            $user->update(['password' => Hash::make($request->password)]);
        }
        $user->updateAvatar();

        return redirect()->back()->with('success', 'Profile Updated Successfully');
    }
}
