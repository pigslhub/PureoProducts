<?php

namespace App\Http\Controllers\Admin\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Shop;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    public function index()
    {
        $admins = DB::table('admins')->where('type' , '1')->get();
        return view('admin.admin.index' , compact('admins'));
    }

    
    public function create()
    {
        return view('admin.admin.create');
    }

    
    public function store(Request $request)
    {
        $admin = Admin::create($request->except('password' , 'avatar'));
        $admin->update([
            "password" => Hash::make('password')
        ]);
        if($request->hasfile('avatar')){

            $file_path = $request->file('avatar')->store('storage/admin/avatar' , 'public');
            $admin->update([
                "avatar" => $file_path
            ]);
        }

        return redirect(route('adminAdmins.index'));
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(Admin $adminAdmin)
    {
        return view('admin.admin.edit' , compact('adminAdmin'));
    }

    
    public function update(Request $request, Admin $adminAdmin)
    {
        // dd($adminAdmin->toArray());
        $adminAdmin->update($request->except('password' , 'avatar'));
        $adminAdmin->update([
            "password" => Hash::make('password')
        ]);
        if($request->hasFile('avatar')){
            $file_path = $request->file('avatar')->store('storage/admin/avatar' , 'public');
            $adminAdmin->update([
                "avatar" => $file_path
            ]);
        }
        return redirect(route('adminAdmins.index'))->with('Admin Updated Successfully');
    }

    
    public function destroy(Admin $adminAdmin)
    {
        $adminAdmin->delete();
        return redirect()->back()->with('success', 'Admin Deleted Successfully');
    }

    public function changeStatus(Admin $adminAdmin){
         
        // dd($adminShop->status);
        if($adminAdmin->status==1){
            // dd('verified');
               $adminAdmin->update([
                   'status'=> '0'
               ]);
        }
        else{
            // dd('unverified');
            $adminAdmin->update([
                'status'=> '1'
            ]);
        }
         return redirect()->back();

    }
}
