<?php

Route::redirect('/home', '/');

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

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontController@mainPage')->name('main.page');
Route::post('/send', 'MailController@send')->name('send.mail');
Route::get('/{url?}', 'FrontController@show')->name('page.simple');
