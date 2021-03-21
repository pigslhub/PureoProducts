<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function updateProfileForm()
    {
        return view('customer.auth.userProfile');
    }

    public function updateProfile(Request $request)
    {
//        dd($request->toArray());
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'phone' => ['required', 'string', 'max:50'],
            'address' => ['required', 'string', 'max:50'],
        ]);

        $customer = Customer::where('id' , $request->id )->first();

        $customer->update($request->except('password'));
        if ($request->password != '' || $request->password != null) {
            $customer->update([
                'password' => Hash::make($request['password'])
            ]);
        }

        return redirect(route('customer.dashboard'))->with('success', 'Profile Updated Successfully.');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
