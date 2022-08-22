<?php

use App\Http\Controllers\Tes2Controller;
use App\Http\Controllers\TesController;
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



Route::get('/', [TesController::class, 'index'])->name('index.tabel');



Route::get('tambah', [TesController::class, 'formTambah'])->name('tambah.tampilan');

Route::post('tambah-proses', [TesController::class, 'prosesTambah'])->name('tambah.proses');

//route update
Route::get('update/{id}', [TesController::class, 'update'])->name('update.tampilan');
//proses update
Route::put('proses-update/{id}', [TesController::class, 'prosesUpdate'])->name('update.proses');

//route hapus
Route::delete('delete/{id}', [TesController::class, 'delete'])->name('delete');
