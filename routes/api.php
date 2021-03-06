<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Driver api

Route::group(['namespace' => 'API\Driver\Auth', 'prefix' => 'driver'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('profile', 'AuthController@profile');
    Route::post('viewProfile', 'AuthController@viewProfile');
    Route::post('updateFcmToken', 'AuthController@updateFcmToken');
    
    Route::post('send_code_to_email', 'ForgotPasswordController@sendCodeToEmail');
    Route::post('verify_code', 'ForgotPasswordController@verifyCode');
    Route::post('password_reset', 'ForgotPasswordController@passwordReset');

});

Route::group(['namespace' => 'API\Driver', 'prefix' => 'driver', 'middleware' => 'auth:api_driver'], function () {
    Route::group(['namespace' => 'Jobs', 'prefix' => 'jobs'], function () {
        Route::post('getAllJobs', 'JobsController@getAllJobs');
        Route::post('acceptOrder', 'JobsController@acceptOrder');
        Route::post('onGoingOrder', 'JobsController@onGoingOrder');
        Route::post('cancelOrder', 'JobsController@cancelOrder');
        Route::post('completedOrder', 'JobsController@completedOrder');
        Route::post('SingleOrderCartDetails', 'JobsController@SingleOrderCartDetails');

    });
    Route::group(['namespace' => 'Chat', 'prefix' => 'chats'], function () {
        Route::post('sendMessage', 'ChatController@sendMessage');
        Route::post('viewAllChat', 'ChatController@viewAllChat');
    });

    Route::group(['namespace' => 'Earning', 'prefix' => 'earnings'], function () {
        Route::post('getTotalEarning', 'EarningController@getTotalEarning');
    });

});

// Customer api
Route::group(['namespace' => 'API\Customer\Auth', 'prefix' => 'customer'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('profile', 'AuthController@profile');
    Route::post('viewProfile', 'AuthController@viewProfile');

    Route::post('send_code_to_email', 'ForgotPasswordController@sendCodeToEmail');
    Route::post('verify_code', 'ForgotPasswordController@verifyCode');
    Route::post('password_reset', 'ForgotPasswordController@passwordReset');
});


Route::group(['namespace' => 'API\Customer', 'prefix' => 'customer', 'middleware' => 'auth:api_customer'], function () {
    Route::get('getAllShopTypes', 'CustomerController@getAllShopTypes');
    Route::post('getShopsOnZipCode', 'CustomerController@getShopsOnZipCode');
    Route::post('getCategoriesOnShopType', 'CustomerController@getCategoriesOnShopType');
    Route::post('getProductsOnCategory', 'CustomerController@getProductsOnCategory');
    Route::post('updateFcmToken', 'CustomerController@updateFcmToken');


    Route::group(['namespace' => 'Orders', 'prefix' => 'orders'], function () {
        Route::post('addToCart', 'OrderController@addToCart');
        Route::post('completeOrder', 'OrderController@completeOrder');
        Route::post('completeOrderWithNoHasCart', 'OrderController@completeOrderWithNoHasCart');
        Route::post('removeFromCart', 'OrderController@removeFromCart');
        Route::post('onGoindOrders', 'OrderController@onGoindOrders');
        Route::post('getCancelOrders', 'OrderController@getCancelOrders');
        Route::post('getCompleteOrders', 'OrderController@getCompleteOrders');
        Route::post('viewCart', 'OrderController@viewCart');
        Route::post('SingleOrderCartDetails', 'OrderController@SingleOrderCartDetails');
        Route::post('markOrderAsCancel', 'OrderController@markOrderAsCancel');
        Route::post('markOrderAsComplete', 'OrderController@markOrderAsComplete');
    });

    Route::group(['namespace' => 'Chat', 'prefix' => 'chats'], function () {
        Route::post('sendMessage', 'ChatController@sendMessage');
        Route::post('viewAllChat', 'ChatController@viewAllChat');
    });

    Route::group(['namespace' => 'Payment', 'prefix' => 'payment'], function () {
        Route::post('createSession', 'PaymentController@createSession');
        Route::post('createSessionWithNoHasCart', 'PaymentController@createSessionWithNoHasCart');
    });

    Route::group(['namespace' => 'Advertisement', 'prefix' => 'advertisement'], function () {
    Route::post('allAdvertisements', 'AdvertisementController@allAdvertisements');
    });
});
