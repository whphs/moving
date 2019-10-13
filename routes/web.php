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
    return view('front_end/index');
});

<<<<<<< HEAD
Route::get('/user_center', function () {
    return view('front_end/user_center/user_center');
});

Route::get('/sign_in', function () {
    return view('front_end/user_center/sign_in/sign_in');
});

Route::get('/sign_wechat', function () {
	return view('front_end/user_center/sign_in/sign_wechat');
});

Route::get('/sign_othermobile', function () {
	return view('front_end/user_center/sign_in/sign_othermobile');
});

Route::get('/sign_phone', function () {
	return view('front_end/user_center/sign_in/sign_phone');
});

Route::get('/order_record', function () {
	return view('front_end/user_center/order_record');
});

Route::get('/bonus_list', function () {
	return view('front_end/user_center/bonus_list');
});

Route::get('/set_up', function () {
	return view('front_end/user_center/set_up/set_up');
});

Route::get('/user_agreement', function () {
	return view('front_end/user_center/set_up/user_agreement');
});

Route::get('/charging_standard', function () {
	return view('front_end/user_center/set_up/charging_standard');
});

Route::get('/about_us', function () {
	return view('front_end/user_center/set_up/about_us');
});
=======
Auth::routes();

>>>>>>> backend
