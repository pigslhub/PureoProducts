<?php


Route::group(['prefix' => 'customer' , 'namespace' => 'Customer\Auth'], function () {

    Route::get('/login'   , ['uses' => 'LoginController@showLoginForm' , 'as' => 'customer.login']);
    Route::post('/login'   , ['uses' => 'LoginController@login' , 'as' => 'customer.login.submit']);
    Route::post('/logout' , ['uses' => 'LoginController@logout' , 'as' => 'customer.logout']);

});

Route::group(['prefix' => 'customer', 'namespace' => 'Customer', 'middleware' => 'auth:customer'], function(){
    Route::get('/', ['uses' => 'CustomerController@index' , 'as' => 'customer.dashboard']);
    Route::resource('customers','CustomerController');
});
