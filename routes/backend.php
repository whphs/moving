<?php

Route::group(['middleware' => ['admin'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'aboutus'], function () {
        Route::get('/', 'AboutUsController@index')->name('aboutus');
        Route::put('/update', 'AboutUsController@update')->name('aboutus.update');
    });

    Route::group(['prefix' => 'terms'], function () {
        Route::get('/', 'TermsController@index')->name('terms');
        Route::put('/update', 'TermsController@update')->name('terms.update');
    });

    Route::resource('users', 'UserController')->except(['create', 'store', 'show']);
    Route::resource('bonuses', 'BonusController')->except(['show']);
    Route::resource('movetypes', 'MoveTypeController')->except(['show']);
    Route::resource('vehicles', 'VehicleController')->except(['show']);
});

