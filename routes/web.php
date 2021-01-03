<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;

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


Route::get('/coba', [DashboardController::class, 'index']);
Route::get('/coba/{nama}', [DashboardController::class, 'detail']);


Route::get('buku/', [BukuController::class, 'index'])->name('buku.index')->middleware('permission:buku.index');
Route::get('buku/tambah', [BukuController::class, 'tambah'])->name('buku.tambah')->middleware('permission:buku.tambah');
Route::post('buku/store', [BukuController::class, 'store'])->name('buku.store')->middleware('permission:buku.store');
Route::get('buku/detail/{id}', [BukuController::class, 'detail'])->name('buku.detail')->middleware('permission:buku.detail');
Route::get('buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit')->middleware('permission:buku.edit');
Route::put('buku/update/{id}', [BukuController::class, 'update'])->name('buku.update')->middleware('permission:buku.update');
Route::delete('buku/delete/{id}', [BukuController::class, 'delete'])->name('buku.delete')->middleware('permission:buku.delete');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
