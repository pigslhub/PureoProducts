<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customer.index' , compact('customers'));
    }

    public function destroy($id)
    {
        //
    }
    public function changeStatus(Customer $adminCustomer){

        // dd($adminShop->status);
        if($adminCustomer->status==1){
            // dd('verified');
            $adminCustomer->update([
                'status'=> '0'
            ]);
        }
        else{
            // dd('unverified');
            $adminCustomer->update([
                'status'=> '1'
            ]);
        }
        return redirect()->back();

    }

}
