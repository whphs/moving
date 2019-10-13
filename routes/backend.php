<?php

Route::group(['middleware' => ['admin'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UserController@index')->name('user');
        Route::get('/edit/{id}', 'UserController@editRole')->name('user.edit');
        Route::put('/update/{id}', 'UserController@updateRole')->name('user.update');
        Route::delete('/delete/{id}', 'UserController@delete')->name('user.delete');
    });

    Route::group(['prefix' => 'aboutus'], function () {
        Route::get('/', 'AboutUsController@index')->name('aboutus');
        Route::put('/update', 'AboutUsController@update')->name('aboutus.update');
    });

    Route::group(['prefix' => 'terms'], function () {
        Route::get('/', 'TermsController@index')->name('terms');
        Route::put('/update', 'TermsController@update')->name('terms.update');
    });

    Route::resource('bonuses', 'BonusController')->except(['show']);
    Route::resource('movetypes', 'MoveTypeController')->except(['show']);
    Route::resource('vehicles', 'VehicleController')->except(['show']);
});

