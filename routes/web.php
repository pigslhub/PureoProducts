<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
     return view('frontend.index');
 });

Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::group(['namespace' => 'Frontend'], function(){
    Route::get('/productsPage', ['uses' => 'FrontendController@productsPage' , 'as' => 'frontend.products']);
    Route::get('/productDetails/{product}', ['uses' => 'FrontendController@productDetails' , 'as' => 'frontend.productDetails']);
    Route::get('/yourCart', ['uses' => 'FrontendController@yourCart' , 'as' => 'frontend.yourCart']);
    Route::get('/checkout', ['uses' => 'FrontendController@checkout' , 'as' => 'frontend.checkout']);
});

Auth::routes(['verify' => true]);
//Route::view('/', 'default')->name('/');
//Route::view('/dashboard', 'default')->name('default  ');
//Route::view('/inner-page', 'inner-page')->name('inner-page');

