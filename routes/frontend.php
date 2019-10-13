<?php
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/aboutus', 'FrontEndController@aboutUs')->name('aboutus');

Route::get('/terms', 'FrontEndController@terms')->name('terms');

Route::get('/bonuses', 'FrontEndController@bonusList')->name('bonuses');
Route::get('/bonuses/{id}', 'FrontEndController@showBonus')->name('bonuses.show');

