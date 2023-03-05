<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Api
Route::get('/apiProduk',[ApiController::class, 'ambilsemua']);
Route::get('/detailProduk/{idProduk}',[ApiController::class, 'ambilsesuaiid']);
Route::post('/createProduk',[ApiController::class, 'tambahproduk']);
Route::put('/updateProduk/{idProduk}',[ApiController::class, 'updateproduk']);
Route::delete('/deleteProduk/{idProduk}',[ApiController::class, 'hapusproduk']);
//Api CEK USER
Route::get('/dataUser',[ApiController::class, 'ambilsemuauser']);
Route::get('/totalUser',[ApiController::class, 'ambiltotaluser']);

