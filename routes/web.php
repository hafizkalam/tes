<?php

use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminmenu', [LayoutController::class, 'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('tenant', TenantController::class);
        Route::controller(MejaController::class)->group(function () {
            Route::get('meja', 'index');
            Route::post('store', 'store')->name('store');
            Route::get('qrcode/{id}', 'generate')->name('generate');
        });
        Route::resource('penjualan', PenjualanController::class);
    });

    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::resource('adminmenu/menu', MenuController::class);
        Route::resource('adminmenu/transaksi', TransaksiController::class);
    });
});
