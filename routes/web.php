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



Route::get('/', [TesController::class, 'index']);

Route::get('/tambah', [TesController::class, 'formTambah'])->name('tambah.tampilan');

Route::post('/tambah/proses', [TesController::class, 'prosesTambah'])->name('tambah.proses');
