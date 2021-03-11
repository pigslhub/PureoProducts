<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function addToCart()
    {
        return view('frontend.cart');
    }
}
