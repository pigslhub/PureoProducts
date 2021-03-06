<?php

namespace App\Http\Controllers\Admin\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Support\Facades\Hash;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all();
        return view('admin.driver.index' , compact('drivers'));
        //dd('drivers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->toArray());
        $driver = Driver::create($request->except('avatar','password'));
        $driver->update([
            "password" => Hash::make('password')
        ]);
        if($request->hasfile('avatar')){
           $file_path = $request->file('avatar')->store('storage/icon','public');
           $driver->update([
              "avatar" => $file_path
           ]);
        }
        return redirect(route('adminDrivers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $adminDriver)
    {
        return view('admin.driver.edit',compact('adminDriver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $adminDriver)
    {
        $adminDriver->update($request->except('icon','password'));
            $adminDriver->update([
            "password" => Hash::make('password')
        ]);
        if($request->hasFile('icon')){

            $file_path = $request->file('icon')->store ('shops/icons','public');
            $adminDriver->update([
                "icon" => $file_path
            ]);
        }
        return redirect(route('adminDrivers.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $adminDriver)
    {
        $adminDriver->delete();
        return redirect()->back()->with('success', 'Shop Deleted Successfully');
    }

    public function changeStatus(Driver $adminDriver){
         
        // dd($adminShop->status);
        if($adminDriver->status==1){
            // dd('verified');
               $adminDriver->update([
                   'status'=> '0'
               ]);
        }
        else{
            // dd('unverified');
            $adminDriver->update([
                'status'=> '1'
            ]);
        }
         return redirect()->back();

    }
}
