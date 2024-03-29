<?php

use Illuminate\Support\Facades\Auth;
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

// Route Authentication
Auth::routes();

// Route Admin
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->name('admin.')
    ->group(function() {
        // Route Admin
        Route::get('/', 'HomeController@index')->name('home');

        // Route Post
        Route::resource('posts', 'PostController');
    });

// FRONT OFFICE
Route::get('{any?}', function () {
    return view('guest.home');
})->where('any', '.*');