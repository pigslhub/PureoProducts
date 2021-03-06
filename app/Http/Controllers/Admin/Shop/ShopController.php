<?php

namespace App\Http\Controllers\Admin\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shop;
use Illuminate\Support\Facades\Hash;

class ShopController extends Controller
{
    public function index()
    {
        return view('admin.shop.index');
    }

    public function create()
    {
        return view('admin.shop.create');
    }

    public function store(Request $request)
    {
        $shop = Shop::create($request->except('icon', 'password'));
        $shop->update([
            "password" => Hash::make('password')
        ]);
        if ($request->hasFile('icon')) {
            $shop->updateAvatar();
        }
        return view('admin.shop.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Shop $adminShop)
    {
        return view('admin.shop.edit', compact('adminShop'));
    }

    public function update(Request $request, Shop $adminShop)
    {
        $adminShop->update($request->except('icon', 'password'));
        $adminShop->update([
            "password" => Hash::make('password')
        ]);
        if ($request->hasFile('icon')) {
            $adminShop->updateAvatar();
        }
        return view('admin.shop.index');
    }

    public function destroy(Shop $adminShop)
    {
        $adminShop->delete();
        return redirect()->back()->with('success', 'Shop Deleted Successfully');
    }

    public function changeStatus(Shop $adminShop)
    {
        if ($adminShop->status == 1) {
            $adminShop->update([
                'status' => '0'
            ]);
        } else {
            $adminShop->update([
                'status' => '1'
            ]);
        }
        return redirect()->back();
    }
}
