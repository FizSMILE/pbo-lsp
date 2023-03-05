<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dataproduk', [App\Http\Controllers\HomeController::class, 'dataproduk'])->name('dataproduk');
Route::get('/tproduk', [App\Http\Controllers\HomeController::class, 'tproduk'])->name('tproduk');
Route::post('/tproduk/store', [App\Http\Controllers\HomeController::class, 'tprodukstore'])->name('tprodukstore');
Route::get('/editproduk/{idProduk}/edit', [App\Http\Controllers\HomeController::class, 'editproduk'])->name('editproduk');
Route::post('/editproduk/{idProduk}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::delete('/deleteproduk/{idProduk}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('destroy');
