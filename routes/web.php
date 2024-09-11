<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailyController;

Route::get('/', function () {
    return view('welcome');
});

// halamanpertama
Route::get('/daily', [DailyController::class, 'index'])->name('daily');

// halamanpegawai
Route::get('/tambahdaily', [DailyController::class, 'tambahdaily'])->name('tambahdaily');

// tambah data
Route::post('/insertdata', [DailyController::class, 'insertdata'])->name('insertdata');

// update data
Route::get('/tampilkandata/{id}', [DailyController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [DailyController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [DailyController::class, 'delete'])->name('delete');

