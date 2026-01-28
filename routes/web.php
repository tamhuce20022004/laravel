<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

//Route Authentication
Route::controller(LoginController::class)->group(function () {
    Route::get('/register', 'index')->name('register');
    Route::post('/dang-ki', 'store')->name('register.store');
    Route::get('/login', 'login')->name('login');
    Route::post('/login-store', 'loginInfo')->name('login.store');
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
Route::get('/nhap-tuoi', function () {
    return view('sinhvien.age');
})->name('age.form');
// Route xử lý lưu session (POST)
Route::post('/luu-tuoi', [LoginController::class, 'storeAge'])->name('age.store');

// Route này sẽ bị chặn nếu Session tuổi < 18 hoặc chưa nhập tuổi
Route::get('/noi-dung-nguoi-lon', function () {
    return "Chào mừng! Bạn đã đủ 18 tuổi để xem trang này.";
})->middleware('check.age');

Route::fallback(function () {
    return view('errors.404');
});






