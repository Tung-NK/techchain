<?php

use App\Http\Controllers\Admin\AuthenController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('admin.user.list-user');
// });

Route::prefix('admin')->middleware('checkAdmin')->group(function () {
    Route::get('/', [AuthenController::class, 'fromLogin'])->name('fromLogin')->withoutMiddleware('checkAdmin');
    Route::post('postLogin', [AuthenController::class, 'postLogin'])->name('postLogin')->withoutMiddleware('checkAdmin');
    Route::get('logout', [AuthenController::class, 'logout'])->name('logout');

    Route::prefix('home')->name('home.')->group(function () {
        Route::get('/', [HomeController::class, 'home'])->name('home');
    });

    Route::prefix('user')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'listUser'])->name('listUser');
        Route::post('add-user', [UserController::class, 'addUser'])->name('addUser');

        Route::get('detail-user', [UserController::class, 'detailUser'])->name('detailUser');
        Route::patch('update-user', [UserController::class, 'updateUser'])->name('updateUser');

        Route::delete('delete-user', [UserController::class, 'deleteUser'])->name('deleteUser');
    });
});

Route::get('home', function () {
    return view('users.');
});
