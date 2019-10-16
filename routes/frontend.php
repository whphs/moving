<?php
// Route::get('/home', 'HomeController@index')->name('home');




// Route::get('/bonuses/{id}', 'FrontEndController@showBonus')->name('bonuses.show');


Route::get('/', 'FrontEndController@index')->name('index');

Route::get('/user_center', function () {
    return view('frontend/user_center/user_center');
});

Route::get('/sign_in', function () {
    return view('frontend/user_center/sign_in/sign_in');
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

Route::get('/bonuses', 'FrontEndController@bonuses')->name('bonuses');

Route::get('/set_up', function () {
	return view('frontend/user_center/set_up/set_up');
});

Route::get('/terms', 'FrontEndController@termCondition')->name('terms');

Route::get('/vehicles', 'FrontEndController@vehicles')->name('vehicles');

Route::get('/about_us', 'FrontEndController@aboutUs')->name('aboutus');