<?php

Route::group(['middleware' => ['admin'], 'as' => 'admin.'], function () {

    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'about_us'], function () {
        Route::get('/', 'AboutUsController@index')->name('about_us');
        Route::put('/update', 'AboutUsController@update')->name('about_us.update');
    });

    Route::group(['prefix' => 'agreement'], function () {
        Route::get('/', 'AgreementController@index')->name('agreement');
        Route::put('/update', 'AgreementController@update')->name('agreement.update');
    });

    Route::resource('user', 'UserController')->except(['create', 'store', 'show']);
    Route::resource('bonus', 'BonusController')->except(['show']);
    Route::resource('area', 'AreaController')->except(['show']);
    Route::resource('move_type', 'MoveTypeController')->except(['show']);
    Route::resource('vehicle', 'VehicleController')->except(['show']);
    Route::resource('scale', 'ScaleController')->except(['show']);
    Route::resource('price', 'PriceController')->except(['show']);
});

