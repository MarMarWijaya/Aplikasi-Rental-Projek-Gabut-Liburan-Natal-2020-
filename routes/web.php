<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

//User
Route::get('/', function () {
    return view('home');
});
Route::get('/pesan', 'UserController@viewAllMobil');
Route::get('/pesan/{idMobil}', 'UserController@viewMobilByID');
Route::post('/prosesData', 'UserController@prosesData');

//Admin
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/logout', 'AdminController@logout');
//Mobil
Route::get('/listmobil', 'AdminController@viewMobil')->middleware('auth')->name('listmobil');
Route::post('/savemobil', 'AdminController@addMobil')->middleware('auth')->name('savemobil');
Route::get('/listmobil/{idMobil}','AdminController@getMobilByID')->middleware('auth')->name('getMobilByID');
Route::get('/hapusMobil/{idMobil}','AdminController@deleteMobil')->middleware('auth')->name('hapusMobil');
Route::post('/updateMobil', 'AdminController@updateMobil')->middleware('auth')->name('updateMobil');

//Pemesanan
Route::get('/listpemesanan', 'AdminController@viewPemesanan')->middleware('auth')->name('listpemesanan');
Route::get('/listpemesanan/{idPemesanan}', 'AdminController@getPemesananByID')->middleware('auth')->name('getPemesananByID');
Route::post('updatePemesanan', 'AdminController@updatePemesanan')->middleware('auth')->name('updatePemesanan');