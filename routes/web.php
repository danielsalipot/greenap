<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SponsorController;
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
    Route::redirect('/','home');
    Route::view('home', 'home')->name('home');
    Route::view('posts', 'post')->name('post');
    Route::view('about', 'about')->name('about');


//
//    Route::prefix('post')->group( function () {
//            Route::get('show', [PostController::class, 'show']);
//        }
//    );
    Route::resource('post', PostController::class);

    Route::view('contact', 'contact')->name('contact');
});

Route::prefix('admin')->group(
    function () {
        Route::resource('post', PostController::class);
        Route::get('posted', [PostController::class, 'posted']);
        Route::resource('sponsor', SponsorController::class);
        Route::resource('message', MessageController::class);
    }
);
