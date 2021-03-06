<?php

namespace App\Http\Controllers\API\Customer\Advertisement;

use App\Advertisement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function allAdvertisements(Request $request)
    {
        $advertisements = Advertisement::where('shop_id', $request->shop_id)->get();
        if($advertisements->count() > 0)
        {
            return response()->json(['advertisements' => $advertisements], 200);
        }else{
            return response()->json(['advertisements' => []], 200);
        }
    }
}
