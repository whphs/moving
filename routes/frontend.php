<?php

Route::get('/', 'FrontEndController@index')->name('index');

Route::get('easy_move_detail/{vehicleId}', 'FrontEndController@easyMoveDetail')->name('easy_move_detail');

Route::get('safe_move', 'FrontEndController@safe_move')->name('safe_move');

Route::get('safe_move_more', function () { return view('frontend.safe_move_more'); });

Route::get('safe_move_detail', function () { return view('frontend.safe_move_detail'); });

Route::get('/user_center', function () { return view('frontend/user_center/index'); });

Route::get('/sign_in', function () { return view('frontend/user_center/sign_in/index'); });

Route::get('/sign_in/phone', function () {	return view('frontend/user_center/sign_in/phone'); });

Route::get('/sign_in/other', function () { return view('frontend/user_center/sign_in/other'); });

Route::get('/bookings', 'FrontEndController@bookings')->name('bookings');

Route::get('/bonuses', 'FrontEndController@bonuses')->name('bonuses');

Route::get('bonus_guide', 'FrontEndController@bonusGuide')->name('bonus_guide');

Route::get('/setting', function () {	return view('frontend/user_center/setting/index'); });

Route::get('/agreement', 'FrontEndController@agreement')->name('agreement');

Route::get('/vehicle_standards', 'FrontEndController@vehicleStandards')->name('vehicle_standards');

Route::get('/about_us', 'FrontEndController@aboutUs')->name('about_us');
