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
    return view('index');
});

Route::get('/user_center', function () {
    return view('user_center');
});

Route::get('/sign_in', function () {
    return view('sign_in');
});

Route::get('/sign_wechat', function () {
	return view('sign_wechat');
});

Route::get('/sign_othermobile', function () {
	return view('sign_othermobile');
});

Route::get('/sign_phone', function () {
	return view('sign_phone');
});

Route::get('/order_record', function () {
	return view('order_record');
});

Route::get('/bonus_list', function () {
	return view('bonus_list');
});

Route::get('/set_up', function () {
	return view('set_up');
});

Route::get('/user_agreement', function () {
	return view('user_agreement');
});

Route::get('/charging_standard', function () {
	return view('charging_standard');
});

Route::get('/about_us', function () {
	return view('about_us');
});