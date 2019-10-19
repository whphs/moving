<?php

Route::get('/', 'FrontEndController@index')->name('index');

Route::get('easymove_detail/{vId}', 'FrontEndController@easymove_detail')->name('easymove_detail');

Route::get('safe_move', 'FrontEndController@safe_move')->name('safe_move');

Route::get('safemove_more', function () { return view('frontend.safemove_more'); });

Route::get('safemove_detail', function () { return view('frontend.safemove_detail'); });

Route::get('/user_center', function () { return view('frontend/user_center/user_center'); });

Route::get('/sign_in', function () { return view('frontend/user_center/sign_in/sign_in'); });

Route::get('/sign_phone', function () {	return view('frontend/user_center/sign_in/sign_phone'); });

Route::get('/sign_othermobile', function () { return view('frontend/user_center/sign_in/sign_othermobile'); });

Route::get('/order_record', 'FrontEndController@record')->name('order_record');

Route::get('/bonuses', 'FrontEndController@bonuses')->name('bonuses');

Route::get('/set_up', function () {	return view('frontend/user_center/set_up/set_up'); });

Route::get('/terms', 'FrontEndController@termCondition')->name('terms');

Route::get('/vehicles', 'FrontEndController@vehicles')->name('vehicles');

Route::get('/about_us', 'FrontEndController@aboutUs')->name('about_us');
