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

Route::get('/','App\Http\Controllers\PagesController@welcome');
Route::get('/index','App\Http\Controllers\PagesController@index');
Route::get('/register','App\Http\Controllers\PagesController@register');
Route::get('/login','App\Http\Controllers\PagesController@login');
Route::get('/detailProduct/{slug}','App\Http\Controllers\PagesController@show');
// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/index', function () {
//     return view('index');
// });