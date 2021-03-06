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
     return view('front.index');
 });

Auth::routes(['verify' => true]);
//Route::view('/', 'default')->name('/');
//Route::view('/dashboard', 'default')->name('default  ');
//Route::view('/inner-page', 'inner-page')->name('inner-page');

