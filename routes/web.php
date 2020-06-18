<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        // Hiển thị danh sách khách hàng
        return view('modules.customer.index');
    });

    Route::get('create', function () {
        // Hiển thị form tạo khách hàng
    });

    Route::post('store', function () {
        // Xu ly du lieu tao khach hang thong qua phuong thuc POST
    });

    Route::get('{id}/show', function () {
        // Hien thi thong tin chi tiet khach hang co ma dinh danh id
    });

    Route::get('{id}/edit', function () {
        // Hien thi form chinh sua thong tin khach hang
    });

    Route::patch('{id}/update', function () {
        // Xu ly du lieu thong thin khach hang duoc chinh sua thong qua  PATCH tu form
    });

    Route::delete('{id}', function () {
        // Xoa thong tin du lieu khach hang
    });
});
