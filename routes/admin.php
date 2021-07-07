<?php


Route::group(['prefix' => 'admin', 'namespace' => 'Admin\Auth'], function () {

    Route::get('login', ['uses' => 'LoginController@showLoginForm', 'as' => 'admin.login']);
    Route::post('login', ['uses' => 'LoginController@login', 'as' => 'admin.login.submit']);
    Route::post('logout', ['uses' => 'LoginController@logout', 'as' => 'admin.logout']);

    Route::group(['prefix' => 'forget-password'], function () {
        Route::get('/email', ['uses' => 'ForgotPasswordController@showLinkRequestForm', 'as' => 'admin.password.request']);
        Route::post('/email', ['uses' => 'ForgotPasswordController@sendResetLinkEmail', 'as' => 'admin.password.email']);
        Route::get('/reset/{token}', ['uses' => 'ResetPasswordController@showResetForm', 'as' => 'admin.password.reset']);
        Route::post('/reset', ['uses' => 'ResetPasswordController@reset', 'as' => 'admin.password.reset.submit']);
    });
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/', ['uses' => 'AdminController@index', 'as' => 'admin.dashboardPos']);
    Route::post('/loadStats', ['uses' => 'AdminController@loadStats', 'as' => 'admin.loadStats']);
    //Route Profile
    Route::get('profile', 'ProfileController@index')->name('admin.profile');
    Route::get('profile/edit', ['uses' => 'ProfileController@edit', 'as' => 'admin.profile.edit']);
    Route::post('profile/update', ['uses' => 'ProfileController@update', 'as' => 'admin.profile.update']);
    //Route For ShopType and Child Group Route
    Route::group(['namespace' => 'Category'], function () {
        Route::resource('adminCategories', 'CategoryController');
    });
    //Route For Categories and Child Group Route
    Route::group(['namespace' => 'SubCategory'], function () {
        Route::get('adminCategory/create/{id}', 'SubCategoryController@create')->name('subcategory.createField');
        Route::resource('adminSubCategories', 'SubCategoryController');
    });
    //Route For Product and Child Group Route
//    Route::group(['namespace' => 'Product'], function(){
//        Route::get('adminProduct/create/field/{id}','ProductController@create')->name('product.createField');
//        Route::get('adminProduct/create/{id}','ProductController@show')->name('product.showCategories');
//        Route::resource('adminProducts','ProductController');
//    });
    Route::group(['namespace' => 'NewProduct'], function () {
        Route::resource('products', 'ProductController');
    });

    //Route For Shop Mangaement and Child Group Route
    Route::group(['namespace' => 'Shop'], function () {
        Route::get('shop/changeStatus/{adminShop}', 'ShopController@changeStatus')->name('adminShops.changeStatus');
        Route::resource('adminShops', 'ShopController');
    });

    //Route For Driver Mangement and Child Group Route
    Route::group(['namespace' => 'Driver'], function () {
        Route::get('driver/changeStatus/{adminDriver}', 'DriverController@changeStatus')->name('adminDriver.changeStatus');
        Route::resource('adminDrivers', 'DriverController');
    });
    //Route For Customer Management
    Route::group(['namespace' => 'Customer'], function () {
        Route::get('customer/changeStatus/{adminCustomer}', 'CustomerController@changeStatus')->name('adminCustomer.changeStatus');
        Route::resource('adminCustomers', 'CustomerController');
    });

    //Route For Admin Mangement and Child Group Route
    Route::group(['namespace' => 'Admin'], function () {
        Route::get('admin/changeStatus/{adminAdmin}', 'AdminController@changeStatus')->name('adminAdmin.changeStatus');
        Route::resource('adminAdmins', 'AdminController');
    });

    Route::group(['namespace' => 'Earning'], function () {
        Route::get('/viewTotalEarning', ['uses' => 'EarningController@viewTotalEarning'])->name('earnings.viewTotalEarning');
        Route::post('/searchEarning', ['uses' => 'EarningController@searchEarning'])->name('earnings.searchEarning');
    });

    Route::group(['namespace' => 'Order'], function () {
        Route::get('/index', ['uses' => 'OrderController@index'])->name('orders.index');
        Route::post('/loadOrderReceipt', ['uses' => 'OrderController@loadOrderReceipt'])->name('orders.loadOrderReceipt');
        Route::post('/loadOrderReceiptOnStartup', ['uses' => 'OrderController@loadOrderReceiptOnStartup'])->name('orders.loadOrderReceiptOnStartup');
        Route::post('/completeOrderOnPrint', ['uses' => 'OrderController@completeOrderOnPrint'])->name('orders.completeOrderOnPrint');
        Route::post('/removeReceiptFromCart', ['uses' => 'OrderController@removeReceiptFromCart'])->name('orders.removeReceiptFromCart');
        Route::get('/loadAllOrders', 'OrderController@loadAllOrders')->name('orders.loadAllOrders');
        Route::post('/loadAllOrdersForChart', 'OrderController@loadAllOrdersForChart')->name('orders.loadAllOrdersForChart');
        Route::post('/loadMonthlyOrdersForChart', 'OrderController@loadMonthlyOrdersForChart')->name('orders.loadMonthlyOrdersForChart');
        Route::post('/loadWeeklyOrdersForChart', 'OrderController@loadWeeklyOrdersForChart')->name('orders.loadWeeklyOrdersForChart');
        Route::get('/showAllChats/{conversation}', ['uses' => 'OrderController@showAllChats'])->name('orders.showAllChats');
        Route::get('onGoingToReady/{order}', 'OrderController@onGoingToReady')->name('orders.onGoingToReady');
        Route::get('readyToComplete/{order}', 'OrderController@readyToComplete')->name('orders.readyToComplete');
        Route::get('onGoingToCancel/{order}', 'OrderController@onGoingToCancel')->name('orders.onGoingToCancel');
    });

    Route::group(['namespace' => 'SalesReturn'], function () {
        Route::get('/salesReturn', ['uses' => 'SalesReturnController@index', 'as' => 'sales_return.index']);
        Route::get('/saleOrdersIndex', ['uses' => 'SalesReturnController@orderIndex'])->name('saleOrders.index');
        Route::post('/saleLoadOrderReceipt', ['uses' => 'SalesReturnController@loadOrderReceipt'])->name('sales_return.loadOrderReceipt');
        Route::post('/saleLoadOrderReceiptOnStartup', ['uses' => 'SalesReturnController@loadOrderReceiptOnStartup'])->name('sales_return.loadOrderReceiptOnStartup');
        Route::post('/saleCompleteOrderOnPrint', ['uses' => 'SalesReturnController@completeOrderOnPrint'])->name('sales_return.completeOrderOnPrint');
        Route::post('/saleRemoveReceiptFromCart', ['uses' => 'SalesReturnController@removeReceiptFromCart'])->name('sales_return.removeReceiptFromCart');
        Route::get('/saleLoadAllOrders', 'SalesReturnController@loadAllOrders')->name('sales_return.loadAllOrders');
        Route::post('/saleLoadAllOrdersForChart', 'SalesReturnController@loadAllOrdersForChart')->name('sales_return.loadAllOrdersForChart');
        Route::post('/saleLoadMonthlyOrdersForChart', 'SalesReturnController@loadMonthlyOrdersForChart')->name('sales_return.loadMonthlyOrdersForChart');
        Route::post('/saleLoadWeeklyOrdersForChart', 'SalesReturnController@loadWeeklyOrdersForChart')->name('sales_return.loadWeeklyOrdersForChart');
        Route::get('/saleShowAllChats/{conversation}', ['uses' => 'SalesReturnController@showAllChats'])->name('sales_return.showAllChats');
        Route::get('saleOnGoingToReady/{order}', 'SalesReturnController@onGoingToReady')->name('sales_return.onGoingToReady');
        Route::get('saleReadyToComplete/{order}', 'SalesReturnController@readyToComplete')->name('sales_return.readyToComplete');
        Route::get('saleOnGoingToCancel/{order}', 'SalesReturnController@onGoingToCancel')->name('sales_return.onGoingToCancel');
        Route::get('updatePointOfSale', 'SalesReturnController@updatePointOfSale')->name('sales_return.updatePointOfSale');
    });
    // Route::resource('manageMyAdmin','ManageMyAdminController');
    // Route::resource('advertisements','AdvertisementController');
});
