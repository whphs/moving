<?php

Route::get('/', 'FrontEndController@index')->name('index');

Route::post('put_session', 'FrontEndController@putSession')->name('put_session');

Route::get('easy_move/detail', 'FrontEndController@easyMoveDetail')->name('easy_move.detail');
Route::get('easy_move/preview', 'FrontEndController@easyMovePreview')->name('easy_move.preview');

Route::get('safe_move/more/{id}', 'FrontEndController@safeMoveMore')->name('safe_move.more');
Route::get('safe_move/detail', 'FrontEndController@safeMoveDetail')->name('safe_move.detail');
Route::get('safe_move/preview', 'FrontEndController@safeMovePreview')->name('safe_move.preview');

Route::get('select_location/{move_type}/{location}', 'FrontEndController@selectLocation')->name('select_location');
Route::get('select_floor/{move_type}/{location}/{address}', 'FrontEndController@selectFloor')->name('select_floor');

Route::get('/user_center', function () { return view('frontend/user_center/index'); });

Route::get('/sign_in', function () { return view('frontend/user_center/sign/index'); });
Route::get('/sign/phone', function () {	return view('frontend/user_center/sign/phone'); });
Route::get('/sign/other', function () { return view('frontend/user_center/sign/other'); });

Route::get('/bookings', 'FrontEndController@bookings')->name('bookings');
Route::get('/booking/show/{id}', 'FrontEndController@bookingShow')->name('booking.show');

Route::get('/bonuses/{where}', 'FrontEndController@bonuses')->name('bonuses');

Route::get('/setting', function () { return view('frontend/user_center/setting/index'); });

Route::get('/agreement', 'FrontEndController@agreement')->name('agreement');

Route::get('/standards', 'FrontEndController@standards')->name('vehicle_standards');
Route::get('/standard/preview/{id}', 'FrontEndController@standardPreview')->name('standard.preview');
Route::get('/standard/description/{id}', 'FrontEndController@standardDescription')->name('standard.description');

Route::get('/about_us', 'FrontEndController@aboutUs')->name('about_us');

Route::post('booking/submit', 'FrontEndController@submitBooking')->name('booking.submit');
