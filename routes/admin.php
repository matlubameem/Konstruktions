<?php


Route::get('login','adminLoginController@showLogin')->name('admin.login');
Route::post('login','adminLoginController@processLogin');
