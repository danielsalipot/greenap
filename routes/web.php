<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InquiriesController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\SponsorController;
use Illuminate\Support\Facades\Auth;
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
    Route::redirect('/', 'home');
    Route::view('home', 'home')->name('home');
    Route::view('posts', 'post')->name('post');
    Route::view('about', 'about')->name('about');
    // Route::view('social', 'social')->name('social');
    Route::get('social', [SocialController::class, 'showPage'])->name('social');


    Route::get('/post/{id}', [PostController::class, 'show']);

    Route::view('contact', 'contact')->name('contact');
});

Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::resource('post', PostController::class);
        Route::get('posted', [PostController::class, 'posted']);
        Route::resource('sponsor', SponsorController::class);

        Route::post('message/reply', [MessageController::class, 'reply']);

        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        Route::get('facebook/refresh', [SocialController::class, 'refreshData']);
    });
    Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
    Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/login');
    });
});

Route::resource('message', MessageController::class);

Route::get('/login', function () {
    return view('admin.login');
})->name('login');
