<?php

Route::group(['middleware' => ['admin'], 'as' => 'admin.'], function () {
    
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'about_us'], function () {
        Route::get('/', 'AboutUsController@index')->name('about_us');
        Route::put('/update', 'AboutUsController@update')->name('about_us.update');
    });

    Route::group(['prefix' => 'term_condition'], function () {
        Route::get('/', 'TermConditionController@index')->name('term_condition');
        Route::put('/update', 'TermConditionController@update')->name('term_condition.update');
    });

    Route::resource('user', 'UserController')->except(['create', 'store', 'show']);
    Route::resource('bonus', 'BonusController')->except(['show']);
    Route::resource('area', 'AreaController')->except(['show']);
    Route::resource('move_type', 'MoveTypeController')->except(['show']);
    Route::resource('vehicle', 'VehicleController')->except(['show']);
});

