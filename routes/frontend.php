<?php
// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/aboutus', 'FrontEndController@aboutUs')->name('aboutus');

// Route::get('/terms', 'FrontEndController@terms')->name('terms');

// Route::get('/bonuses', 'FrontEndController@bonusList')->name('bonuses');
// Route::get('/bonuses/{id}', 'FrontEndController@showBonus')->name('bonuses.show');


Route::get('/', function () {
    return view('frontend/index');
});

Route::get('/user_center', function () {
    return view('frontend/user_center/user_center');
});

Route::get('/sign_in', function () {
    return view('frontend/user_center/sign_in/sign_in');
});

Route::get('/sign_wechat', function () {
	return view('frontend/user_center/sign_in/sign_wechat');
});

Route::get('/sign_othermobile', function () {
	return view('frontend/user_center/sign_in/sign_othermobile');
});

Route::get('/sign_phone', function () {
	return view('frontend/user_center/sign_in/sign_phone');
});

Route::get('/order_record', function () {
	return view('frontend/user_center/order_record');
});

Route::get('/bonus_list', function () {
	return view('frontend/user_center/bonus_list');
});

Route::get('/set_up', function () {
	return view('frontend/user_center/set_up/set_up');
});

Route::get('/user_agreement', function () {
	return view('frontend/user_center/set_up/user_agreement');
});

Route::get('/charging_standard', function () {
	return view('frontend/user_center/set_up/charging_standard');
});

Route::get('/about_us', function () {
	return view('frontend/user_center/set_up/about_us');
});