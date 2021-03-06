<?php


Route::group(['prefix' => 'driver' , 'namespace' => 'Driver\Auth'], function () {

    Route::get('/login'   , ['uses' => 'LoginController@showLoginForm' , 'as' => 'driver.login']);
    Route::post('/login'   , ['uses' => 'LoginController@login' , 'as' => 'driver.login.submit']);
    Route::post('/logout' , ['uses' => 'LoginController@logout' , 'as' => 'driver.logout']);

});

Route::group(['prefix' => 'driver', 'namespace' => 'Driver', 'middleware' => 'auth:driver'], function(){
     Route::get('/', ['uses' => 'DriverController@index' , 'as' => 'driver.dashboard']);

});