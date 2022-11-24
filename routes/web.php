<?php

use Database\Seeders\PenggunaSeeder;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/','App\Http\Controllers\PagesController@welcome');
Route::get('/register','App\Http\Controllers\RegisterController@register');
Route::post('/register','App\Http\Controllers\RegisterController@store');
Route::get('/login','App\Http\Controllers\LoginController@index');
Route::post('/login','App\Http\Controllers\LoginController@authenticate');
Route::get('/forgot','App\Http\Controllers\PagesController@forgot');
// Route::get('/account','App\Http\Controllers\PagesController@accPage');
// Route::get('/book2','App\Http\Controllers\PagesController@book2Disp');
// Route::get('/book3','App\Http\Controllers\PagesController@book3Disp');
// Route::get('/book4','App\Http\Controllers\PagesController@book4Disp');
// Route::get('/book5','App\Http\Controllers\PagesController@book5Disp');
// Route::get('/book6','App\Http\Controllers\PagesController@book6Disp');
// Route::get('/book7','App\Http\Controllers\PagesController@book7Disp');
// Route::get('/book8','App\Http\Controllers\PagesController@book8Disp');
// Route::get('/sign-in','App\Http\Controllers\PagesController@inAdmin');
// Route::get('/sign-up','App\Http\Controllers\PagesController@upAdmin');
// Route::get('/Buku','App\Http\Controllers\PagesController@BukuAdmin');



Route::group(['middleware' => 'auth'], function() {

    // Halaman yang bisa diakses oleh Admin
    Route::group(['middleware' => 'cekrole:admin'], function() {
        Route::get('/tables',[PenggunaController::class,'index']);
        Route::get('/createPengguna',[PenggunaController::class,'create']);
        Route::post('/store',[PenggunaController::class,'store']);
        Route::get('admin/{id}/edit',[PenggunaController::class,'edit']);
        // Route::get('admin/{id}',[PenggunaController::class,'update']);
        Route::post('admin-edit',[PenggunaController::class,'update']);
        Route::delete('admin/{id}',[PenggunaController::class,'destroy']);

        Route::get('detailProduct/{id}',[BukuController::class,'detail']);
        Route::get('/Buku',[BukuController::class,'index2']);
        Route::get('/createBuku',[BukuController::class,'create']);
        Route::get('admin/{id}/editBuku',[BukuController::class,'edit']);
        Route::post('/store',[BukuController::class,'store']);
        Route::post('admin-editBuku',[BukuController::class,'update']);
        Route::delete('admin/{id}',[BukuController::class,'destroy']);

        Route::get('/profile','App\Http\Controllers\PagesController@profileAdmin');
        Route::get('/virtual-reality','App\Http\Controllers\PagesController@virtualRealtyAdmin');
        Route::get('/rtl','App\Http\Controllers\PagesController@rtlAdmin');
        Route::get('/dashboard','App\Http\Controllers\PagesController@dashboardAdmin');
    });

    // Halaman yang bisa diakses oleh Customer
    Route::group(['middleware' => 'cekrole:customer'], function() {
        Route::get('/index','App\Http\Controllers\BukuController@index');
        Route::get('/book1','App\Http\Controllers\PagesController@book1Disp');
        Route::get('/form','App\Http\Controllers\PagesController@formBuy');
    });
});


// Route::get('/login', function () {
    //     return view('login');
    // });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/index', function () {
//     return view('index');
// });
