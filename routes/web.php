<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('product')->group(function () {
    Route::get('/', function () {
        return view('product.index');
    });

    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    Route::get('/{id?}', function ($id = '123') {
        return "Product ID: " . $id;
    })->where('id', '.*');
});

Route::get('/sinhvien/{name?}/{mssv?}', function ($name = 'Luong Xuan Hieu', $mssv = '123456') {
    return view('sinhvien.info', ['name' => $name, 'mssv' => $mssv]);
});

Route::get('/banco/{n}', function ($n) {
    $n = (int) $n;
    if ($n < 1 || $n > 20) {
        return "Kích thước bàn cờ phải từ 1 đến 20.";
    }
    return view('banco', ['n' => $n]);
});

Route::fallback(function () {
    return view('errors.404');
});






