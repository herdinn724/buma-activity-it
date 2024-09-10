<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

// halamanpertama
Route::get('/daily', [EmployeeController::class, 'index'])->name('daily');

// halamanpegawai
Route::get('/tambahdaily', [EmployeeController::class, 'tambahdaily'])->name('tambahdaily');

// tambah data
Route::post('/insertdata', [EmployeeController::class, 'insertdata'])->name('insertdata');

// update data
Route::get('/tampilkandata/{id}', [EmployeeController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [EmployeeController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name('delete');

