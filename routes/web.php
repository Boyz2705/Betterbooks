<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\kategoriBukuController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/',[PagesController::class,'welcome']);
Route::get('/register',[RegisterController::class,'register']);
Route::post('/register',[RegisterController::class,'store']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenticate']);
Route::get('/forgot',[PagesController::class,'forgot']);
Route::post('/logout',[LoginController::class,'logout']);



Route::group(['middleware' => 'auth'], function() {

    // Halaman yang bisa diakses oleh Admin
    Route::group(['middleware' => 'cekrole:admin'], function() {
        Route::get('/tables',[PenggunaController::class,'index']);
        Route::get('/createPengguna',[PenggunaController::class,'create']);
        Route::post('user/store',[PenggunaController::class,'store']);
        Route::get('admin/user/{id}/edit',[PenggunaController::class,'edit']);
        Route::post('admin-edit',[PenggunaController::class,'update']);
        Route::delete('admin/user/{id}',[PenggunaController::class,'destroy']);

        Route::get('/rtl',[kategoriBukuController::class,'index']);
        Route::get('/createKategori',[kategoriBukuController::class,'create']);
        Route::post('kat/store',[kategoriBukuController::class,'store']);
        Route::delete('admin/kat/{id}',[kategoriBukuController::class,'destroy']);

        Route::get('/Buku',[BukuController::class,'index2']);
        Route::get('/createBuku',[BukuController::class,'create']);
        Route::get('admin/buku/{id}/editBuku',[BukuController::class,'edit']);
        Route::post('buku/store',[BukuController::class,'store']);
        Route::post('admin-editBuku',[BukuController::class,'update']);
        Route::delete('admin/buku/{id}',[BukuController::class,'destroy']);

        Route::get('/profile',[PagesController::class,'profileAdmin']);
        Route::get('/virtual-reality',[PagesController::class,'virtualRealtyAdmin']);
        // Route::get('/rtl',[PagesController::class,'rtlAdmin']);
        Route::get('/dashboard',[PagesController::class,'dashboardAdmin']);
    });

    // Halaman yang bisa diakses oleh Customer
    Route::group(['middleware' => 'cekrole:customer'], function() {
        Route::get('/index',[BukuController::class,'index']);
        Route::get('/book1',[PagesController::class,'book1Disp']);
        Route::get('detailProduct/{id}',[BukuController::class,'detail']);
        Route::get('/form/{id}',[BukuController::class,'checkout']);
        Route::post('/customer-buy',[TransaksiController::class,'customerBuy']);
        Route::get('/invoice/{id}',[TransaksiController::class,'invoice']);
    });
});