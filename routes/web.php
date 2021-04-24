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

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('home', function () {
        return view('admin.home');
    })->name('home');

    // login routes
    Route::prefix('login')->name('login.')->group(function () {
        Route::get('form', 'Admin\AuthController@form');
        Route::post('submit', 'Admin\AuthController@submit')->name('submit');
        Route::get('logout', 'Admin\AuthController@logout')->name('logout');
    });
});
