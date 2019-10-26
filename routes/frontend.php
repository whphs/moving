<?php

Route::get('/', 'FrontEndController@index')->name('index');

Route::post('put_session', 'FrontEndController@putSession')->name('put_session');

Route::get('easy_move/detail', 'FrontEndController@easyMoveDetail')->name('easy_move_detail');

Route::post('easy_move/put_session', 'FrontEndController@putDetailInfoSession')->name('easy_move.put_session');

Route::post('put_session', 'FrontEndController@putSession')->name('easy_move.putSession');
Route::get('easy_move/preview/{id}', 'FrontEndController@easyMovePreview')->name('easy_move.preview');

Route::get('current_location/{index}', 'FrontEndController@location');
Route::get('current_location/floor/{index}', 'FrontEndController@floor');

Route::get('destination_location/{index}', 'FrontEndController@location');
Route::get('destination_location/floor/{index}', 'FrontEndController@floor');


Route::get('safe_move/more/{id}', 'FrontEndController@safeMoveMore')->name('safe_move.more');
Route::get('safe_move/detail/{id}', 'FrontEndController@safeMoveDetail')->name('safe_move.detail');
Route::get('safe_move/preview', 'FrontEndController@safeMovePreview')->name('safe_move.preview');

Route::get('safe_move/location', function () { return view('frontend/request/common/current_location'); });

Route::get('/user_center', function () { return view('frontend/user_center/index'); });

Route::get('/sign_in', function () { return view('frontend/user_center/sign/index'); });
Route::get('/sign/phone', function () {	return view('frontend/user_center/sign/phone'); });
Route::get('/sign/other', function () { return view('frontend/user_center/sign/other'); });

Route::get('/bookings', 'FrontEndController@bookings')->name('bookings');
Route::get('/booking/show/{id}', 'FrontEndController@bookingShow')->name('booking.show');

Route::get('/bonuses', 'FrontEndController@bonuses')->name('bonuses');
Route::get('bonus_guide', 'FrontEndController@bonusGuide')->name('bonus_guide');

Route::get('/setting', function () { return view('frontend/user_center/setting/index'); });

Route::get('/agreement', 'FrontEndController@agreement')->name('agreement');

Route::get('/standards', 'FrontEndController@standards')->name('vehicle_standards');
Route::get('/standard/preview/{id}', 'FrontEndController@standardPreview')->name('standard.preview');
Route::get('/standard/description/{id}', 'FrontEndController@standardDescription')->name('standard.description');

Route::get('/about_us', 'FrontEndController@aboutUs')->name('about_us');

Route::post('booking/submit', 'FrontEndController@submitBooking')->name('booking.submit');
