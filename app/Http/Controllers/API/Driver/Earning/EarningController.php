<?php

namespace App\Http\Controllers\API\Driver\Earning;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chat\Chat;
use App\Models\Chat\Conversation;
use App\Models\General\Order;
use Kreait\Firebase\Factory;

class EarningController extends Controller
{
    public function getTotalEarning(Request $request){
        $totalEarning = 0;
        $allJobs = Order::where('driver_id', $request->driver_id)->where('status', 'complete')->get();
        $allJobs->load('shop');
        $allJobs->load('customer');
        $allJobs->load('driver');
        foreach ($allJobs as $job) {
            $totalEarning += $job->amount * $job->shop->commission / 100;
           
        }

       
        return response()->json(["total_earning" => $totalEarning,"completed_orders" =>$allJobs ]);
    }



}
