<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.profile.index', compact('user'));
    }

    public function edit()
    {
        $user = auth('admin')->user();
        return view('admin.profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth('admin')->user();
        $user->update($request->except('avatar', 'password'));
        if ($request->has('password')){
            $user->update(['password' => Hash::make($request->password)]);
        }
        $user->updateAvatar();

        return redirect()->back()->with('success', 'Profile Updated Successfully');
    }
}
