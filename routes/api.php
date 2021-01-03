<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuApiController;

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


Route::get('buku', [BukuApiController::class, 'index']);
Route::post('buku/store', [BukuApiController::class, 'store']);
Route::get('buku/detail/{id}',  [BukuApiController::class, 'detail']);
Route::put('buku/update/{id}', [BukuApiController::class, 'update']);
Route::delete('buku/delete/{id}', [BukuApiController::class, 'delete']);