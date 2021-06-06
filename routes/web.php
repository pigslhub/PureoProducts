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

//  Route::get('/', function () {
//      return view('frontend.index');
//  });

Route::get('/', ['uses' => 'Admin\Auth\LoginController@showLoginForm' , 'as' => 'admin.login']);

// Route::group(['namespace' => 'Frontend'], function(){
//     Route::get('/dashboard', ['uses' => 'FrontendController@dashboard' , 'as' => 'frontend.dashboard' ]);
//     Route::get('/productsPage/{subCategory}', ['uses' => 'FrontendController@productsPage' , 'as' => 'frontend.products']);
//     Route::get('/subcategories/{category}', ['uses' => 'FrontendController@subcategories' , 'as' => 'frontend.subcategories']);
//     Route::get('/productDetails/{product}', ['uses' => 'FrontendController@productDetails' , 'as' => 'frontend.productDetails']);
//     Route::get('/yourCart/{id}', ['uses' => 'FrontendController@yourCart' , 'as' => 'frontend.yourCart']);
//     Route::get('/checkout', ['uses' => 'FrontendController@checkout' , 'as' => 'frontend.checkout']);
//     Route::get('/allOngoingOrders', ['uses' => 'OrderController@allOngoingOrders' , 'as' => 'frontend.allOngoingOrders']);
//     Route::get('/allCompletedOrders', ['uses' => 'OrderController@allCompletedOrders' , 'as' => 'frontend.allCompletedOrders']);
//     Route::get('/allOngoingOrderCarts/{order}', ['uses' => 'OrderController@allOngoingOrderCarts' , 'as' => 'frontend.allOngoingOrderCarts']);
//     Route::get('/allCompletedOrderCarts/{order}', ['uses' => 'OrderController@allCompletedOrderCarts' , 'as' => 'frontend.allCompletedOrderCarts']);
//     Route::resource('carts','FrontendCartController');
//     Route::post('checkoutsession', 'PaymentController@createSession')->name('frontend.checkoutpayment');
// });

Auth::routes(['verify' => true]);
//Route::view('/', 'default')->name('/');
//Route::view('/dashboard', 'default')->name('default  ');
//Route::view('/inner-page', 'inner-page')->name('inner-page');

