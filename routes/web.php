<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pln', [App\Http\Controllers\plnController::class, 'index']);
Route::get('/pln/create', [App\Http\Controllers\plnController::class, 'create']);
Route::post('/pln', [App\Http\Controllers\plnController::class, 'store']);
Route::get('/pln/edit/{id}', [App\Http\Controllers\plnController::class, 'edit']);
Route::patch('/pln/{id}', [App\Http\Controllers\plnController::class, 'update']);
Route::delete('/pln/{id}', [App\Http\Controllers\plnController::class, 'destroy']);

Route::get('/barang', [App\Http\Controllers\barangController::class, 'index']);
Route::get('/barang/create', [App\Http\Controllers\barangController::class, 'create']);
Route::post('/barang', [App\Http\Controllers\barangController::class, 'store']);
Route::get('/barang/edit/{id}', [App\Http\Controllers\barangController::class, 'edit']);
Route::patch('/barang/{id}', [App\Http\Controllers\barangController::class, 'update']);
Route::delete('/barang/{id}', [App\Http\Controllers\barangController::class, 'destroy']);

Route::get('/pesanan', [App\Http\Controllers\pesananController::class, 'index']);
Route::get('/pesanan/create', [App\Http\Controllers\pesananController::class, 'create']);
Route::post('/pesanan', [App\Http\Controllers\pesananController::class, 'store']);
Route::get('/pesanan/edit/{id}', [App\Http\Controllers\pesananController::class, 'edit']);
Route::patch('/pesanan/{id}', [App\Http\Controllers\pesananController::class, 'update']);
Route::delete('/pesanan/{id}', [App\Http\Controllers\pesananController::class, 'destroy']);
