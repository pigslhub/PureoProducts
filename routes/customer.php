<?php


Route::group(['prefix' => 'customer' , 'namespace' => 'Customer\Auth'], function () {
    Route::get('/login'   , ['uses' => 'LoginController@showLoginForm' , 'as' => 'customer.login']);
    Route::post('/login'   , ['uses' => 'LoginController@login' , 'as' => 'customer.login.submit']);
    Route::post('/logout' , ['uses' => 'LoginController@logout' , 'as' => 'customer.logout']);

    Route::get('/register', ['uses' => 'RegisterController@showRegistrationForm', 'as' => 'customer.register']);
    Route::post('/register', ['uses' => 'RegisterController@register', 'as' => 'customer.submit.register']);
});

Route::group(['prefix' => 'customer', 'namespace' => 'Customer', 'middleware' => 'auth:customer'], function(){
    Route::get('/', ['uses' => 'CustomerController@index' , 'as' => 'customer.dashboard']);
    Route::get('/updateProfileForm', ['uses' => 'ProfileController@updateProfileForm' , 'as' => 'customer.updateProfileForm']);
    Route::post('/updateProfile', ['uses' => 'ProfileController@updateProfile' , 'as' => 'customer.updateProfile']);
    Route::resource('customers','CustomerController');
});
