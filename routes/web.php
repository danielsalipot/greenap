<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::group(['prefix' => '/'], function () {
    Route::view('/', 'home')->name('home');
    Route::view('post', 'post')->name('post');
    Route::view('about', 'about')->name('about');
    Route::view('contact', 'contact')->name('contact');
});

Route::prefix('admin')->group(
    function () {
        Route::resource('post', PostController::class);
    }
);
