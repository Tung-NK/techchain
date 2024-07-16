<?php

use Illuminate\Support\Facades\Route;


Route::get('admin', function () {
    return view('admin.layout.default');
});

Route::get('detail', function () {
    return view('users.product.detail');
});

Route::get('/', function () {
    return view('users.home');
});
