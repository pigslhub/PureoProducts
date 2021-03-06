<?php

Route::group(['prefix' => 'shop' , 'namespace' => 'Shop\Auth'], function () {
    Route::get('login'   , ['uses' => 'LoginController@showLoginForm' , 'as' => 'shop.login']);
    Route::post('login'   , ['uses' => 'LoginController@login' , 'as' => 'shop.login.submit']);
    Route::post('logout' , ['uses' => 'LoginController@logout' , 'as' => 'shop.logout']);

    Route::get('register', ['uses' => 'RegisterController@showRegistrationForm', 'as' => 'shop.register']);
    Route::post('register', ['uses' => 'RegisterController@register', 'as' => 'shop.submit.register']);

    Route::group(['prefix' => 'forget-password'], function () {
        Route::get('/email', ['uses' => 'ForgotPasswordController@showLinkRequestForm', 'as' => 'shop.password.request']);
        Route::post('/email', ['uses' => 'ForgotPasswordController@sendResetLinkEmail', 'as' => 'shop.password.email']);
        Route::get('/reset/{token}', ['uses' => 'ResetPasswordController@showResetForm', 'as' => 'shop.password.reset']);
        Route::post('/reset', ['uses' => 'ResetPasswordController@reset', 'as' => 'shop.password.reset.submit']);
    });
});

Route::group(['prefix' => 'shop', 'namespace' => 'Shop', 'middleware' => 'auth:shop'], function(){
    Route::get('/', ['uses' => 'ShopController@index' , 'as' => 'shop.dashboard']);
    //Route Profile
    Route::get('profile', 'ProfileController@index')->name('shop.profile');
    Route::get('profile/edit', ['uses' => 'ProfileController@edit', 'as' => 'shop.profile.edit']);
    Route::post('profile/update', ['uses' => 'ProfileController@update', 'as' => 'shop.profile.update']);
    //Route For
    Route::group(['namespace' => 'Advertisement'], function(){
        Route::resource('advertisements','AdvertisementController');
    });

    //Route For
    Route::group(['namespace' => 'POS'], function(){
        Route::resource('shopPOSs','POSController');
        Route::post('/loadProductsViaAjax' , ['uses' => 'POSController@loadProductsViaAjax'])->name('products.loadAjaxProducts');
    });

    //Route For
    Route::group(['namespace' => 'ShopProduct'], function(){
        Route::get('/product/{id}','ShopProductController@create')->name('shopProducts.create');
        Route::resource('shopProducts','ShopProductController')->except('create');
        // Route::post('/loadProductsViaAjax' , ['uses' => 'POSController@loadProductsViaAjax'])->name('products.loadAjaxProducts');
    });

    Route::group(['namespace' => 'ManageMyProduct'], function(){
        Route::get('/loadedProduct/{id}','ManageMyProductController@create')->name('manageMyProducts.create');
        Route::resource('manageMyProducts','ManageMyProductController')->except('create');
        // Route::post('/loadProductsViaAjax' , ['uses' => 'POSController@loadProductsViaAjax'])->name('products.loadAjaxProducts');
    });

    Route::group(['namespace' => 'ManageMyShop'], function(){
        Route::resource('manageMyShop','ManageMyShopController')->only('index','update');
    });

    Route::group(['namespace' => 'Orders'], function(){
        Route::post('/loadOrderReceipt' , ['uses' => 'OrderController@loadOrderReceipt'])->name('ordersShop.loadOrderReceipt');
        Route::post('/loadAllProductsAgainstCategory' , ['uses' => 'OrderController@loadAllProductsAgainstCategory'])->name('ordersShop.loadAllProductsAgainstCategory');
        Route::post('/createManualReceipt' , ['uses' => 'OrderController@createManualReceipt'])->name('ordersShop.createManualReceipt');
        Route::get('loadAllOrders' , ['uses' => 'OrderController@loadAllOrders'])->name('orders.loadAllOrdersShop');
        Route::get('/showAllChats/{conversation}' , ['uses' => 'OrderController@showAllChats'])->name('orders.showAllChatsShop');
        Route::get('onGoingToReady/{order}', 'OrderController@onGoingToReady')->name('orders.onGoingToReadyShop');
        Route::get('readyToComplete/{order}', 'OrderController@readyToComplete')->name('orders.readyToCompleteShop');
        Route::get('onGoingToCancel/{order}', 'OrderController@onGoingToCancel')->name('orders.onGoingToCancelShop');
    });
    Route::group(['namespace' => 'Chat'], function(){
       Route::post('sendmessage', 'ChatController@sendMessage')->name('orders.sendmessage');
        Route::post('readmessage', 'ChatController@readMessage')->name('orders.readmessage');
        Route::post('storemessage', 'ChatController@storeMessage')->name('orders.storemessage');
    });
});
