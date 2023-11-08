<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\General;
use App\Http\Controllers\Home;

use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\BarangKeluarController;

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



Route::post('/postlogin', [LoginController::class, 'postLogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/', [LoginController::class, 'login']);


Route::get('/tentang_aplikasi', [Home::class, 'tentangAplikasi']);


Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
});

// GENERAL CONTROLLER ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:Administrator,pimpinan']], function () {

    Route::get('/dashboard', [General::class, 'dashboard']);
    Route::get('/profile', [General::class, 'profile']);
    Route::get('/bantuan', [General::class, 'bantuan']);

    Route::post('/ubah_foto_profile', [General::class, 'ubahFotoProfile']);
    Route::post('/ubah_role', [General::class, 'ubahRole']);
});

// ADMIN ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {
});


// ADMIN ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:Administrator,pimpinan']], function () {
    Route::group(['prefix' => 'admin'], function () {
        // GET REQUEST
        Route::get('/pengguna', [Admin::class, 'pengguna']);
        Route::get('/fetch_data', [Admin::class, 'fetchData']);

        // CRUD PENGGUNA
        Route::post('/create_pengguna', [Admin::class, 'createPengguna']);
        Route::post('/update_pengguna', [Admin::class, 'updatePengguna']);
        Route::post('/delete_pengguna', [Admin::class, 'deletePengguna']);
    });

    Route::get('/barang', [BarangController::class, 'index']);
    Route::get('/barang/create', [BarangController::class, 'create']);
    Route::post('/barang/store', [BarangController::class, 'store']);
    Route::get('/barang/{id}/edit', [BarangController::class, 'edit']);
    Route::post('/barang/update/{id}', [BarangController::class, 'update']);
    Route::get('/barang/{id}/delete', [BarangController::class, 'destroy']);

    Route::get('/barang_masuk', [BarangMasukController::class, 'index']);
    Route::get('/barang_masuk/create', [BarangMasukController::class, 'create']);
    Route::post('/barang_masuk/store', [BarangMasukController::class, 'store']);
    Route::get('/barang_masuk/{id}/edit', [BarangMasukController::class, 'edit']);
    Route::post('/barang_masuk/update/{id}', [BarangMasukController::class, 'update']);
    Route::get('/barang_masuk/{id}/delete', [BarangMasukController::class, 'destroy']);

    Route::get('/barang_keluar', [BarangKeluarController::class, 'index']);
    Route::get('/barang_keluar/create', [BarangKeluarController::class, 'create']);
    Route::post('/barang_keluar/store', [BarangKeluarController::class, 'store']);
    Route::get('/barang_keluar/{id}/edit', [BarangKeluarController::class, 'edit']);
    Route::post('/barang_keluar/update/{id}', [BarangKeluarController::class, 'update']);
    Route::get('/barang_keluar/{id}/delete', [BarangKeluarController::class, 'destroy']);

    Route::get('/laporan', [LaporanController::class, 'index']);

});
