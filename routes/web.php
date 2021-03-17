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

Route::group(['namespace' => 'Frontend'], function(){
    Route::get('/dashboard', ['uses' => 'FrontendController@dashboard' , 'as' => 'frontend.dashboard' ]);
    Route::get('/productsPage/{subCategory}', ['uses' => 'FrontendController@productsPage' , 'as' => 'frontend.products']);
    Route::get('/subcategories/{category}', ['uses' => 'FrontendController@subcategories' , 'as' => 'frontend.subcategories']);
    Route::get('/productDetails/{product}', ['uses' => 'FrontendController@productDetails' , 'as' => 'frontend.productDetails']);
    Route::get('/yourCart/{id}', ['uses' => 'FrontendController@yourCart' , 'as' => 'frontend.yourCart']);
    Route::get('/checkout', ['uses' => 'FrontendController@checkout' , 'as' => 'frontend.checkout']);
    Route::get('/allOrders', ['uses' => 'OrderController@allOrders' , 'as' => 'frontend.allOrders']);
    Route::get('/allOrdersCart/{order}', ['uses' => 'OrderController@allOrdersCart' , 'as' => 'frontend.allOrdersCart']);
    Route::resource('carts','FrontendCartController');
    Route::post('checkoutsession', 'PaymentController@createSession')->name('frontend.checkoutpayment');
});

Auth::routes(['verify' => true]);
//Route::view('/', 'default')->name('/');
//Route::view('/dashboard', 'default')->name('default  ');
//Route::view('/inner-page', 'inner-page')->name('inner-page');

