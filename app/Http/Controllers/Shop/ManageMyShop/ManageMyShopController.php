<?php

namespace App\Http\Controllers\Shop\ManageMyShop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ShopType;
use App\Shop;
use Illuminate\Support\Facades\DB;

class ManageMyShopController extends Controller
{
    public function index()
    {
        // dd('reached');
        $allShopTypes=DB::table('shop_types')->get();
        // dd($allShopTypes->toArray());
        return view('shop.manageMyShop.index',compact('allShopTypes'));
    }


    public function update(Request $request, ShopType $manageMyShop)
    {
        // dd("ethy paan yuwaan aya ay ?");
        // dd($manageMyShop->toArray());
        // return redirect()->back();
        // dd($request->toArray());

        $shop_id = auth()->user('shop')->id;
        Shop::where('id', $shop_id)->update([
            'shop_type_id' => $manageMyShop->id,
        ]);

        return redirect()->back()->with('success', 'Shop Type '."$manageMyShop->type".' Updated Successfully in shop.');
    }
}
