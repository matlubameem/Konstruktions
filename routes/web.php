<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
<<<<<<< HEAD

//Route::get('/', function () {
//    return view('back_end.auth.login');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
// Single Route For Admin Panel Landing Page
Route::get('/', function () {
    return view('back_end.home');
})->middleware('auth')->name('home');

// Route For Admin Dashboard
Route::get('/dashboard', function () {
    return view('back_end.dashboard');
})->middleware('auth')->name('admin.dashboard');

// Default User Login logic
Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {

    // Project Tree Routes
    Route::prefix('project')->group(function () {
        Route::get('add','ProjectController@showProjectAdd')->name('project.add');
        Route::post('add','ProjectController@processProjectAdd');
    });
});


>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
