<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use App\Models\Driver;
use App\Shop;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function loadStats()
    {
        $shops = Shop::get()->count();
        $customers = Customer::get()->count();
        $drivers = Driver::get()->count();
        return json_encode(["shops" => $shops, "customers" => $customers, "drivers" => $drivers]);
    }
}
