<?php

use App\Http\Controllers\Admin\AuthenController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
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

    // category
    Route::prefix('category')->name('categorys.')->group(function () {
        Route::get('/', [CategoryController::class, 'listCate'])->name('listCate');

        Route::get('add-category', [CategoryController::class, 'create'])->name('create');
        Route::post('add-category', [CategoryController::class, 'addCategory'])->name('addCategory');

        Route::get('update-category/{id}', [CategoryController::class, 'update'])->name('update');
        Route::put('add-category/{id}', [CategoryController::class, 'updatePost'])->name('updatePost');

        Route::delete('delete-category/{id}', [CategoryController::class, 'delete'])->name('delete');
    });

    Route::prefix('product')->name('products.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');

        Route::get('add-product', [ProductController::class, 'create'])->name('create');
        Route::post('add-product', [ProductController::class, 'store'])->name('store');

        Route::get('update-product/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::put('update-product/{id}', [ProductController::class, 'update'])->name('update');

        Route::delete('delete-product/{id}', [ProductController::class, 'destroy'])->name('destroy');
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
