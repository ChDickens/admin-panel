<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin-panel', 'middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('page', 'PageController');
    Route::resource('post', 'PostController');
    Route::resource('email', 'EmailController');
    Route::resource('customer', 'CustomerController');
    Route::resource('menu', 'MenuController');
    Route::resource('setting', 'SettingController');
    Route::resource('gallery', 'GalleryController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
