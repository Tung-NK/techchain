<?php

use App\Http\Controllers\Admin\AuthenController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.user.list-user');
});

Route::prefix('admin')->middleware('checkAdmin')->group(function () {
    Route::get('/', [AuthenController::class, 'fromLogin'])->name('fromLogin')->withoutMiddleware('checkAdmin');
    Route::post('postLogin', [AuthenController::class, 'postLogin'])->name('postLogin')->withoutMiddleware('checkAdmin');
    Route::get('logout', [AuthenController::class,'logout'])->name('logout');

    Route::prefix('home')->name('home.')->group(function () {
        Route::get('/', [HomeController::class, 'home'])->name('home');
    });
});

Route::get('home', function () {
    return view('users.');
});
