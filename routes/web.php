<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai', [PegawaiController::class, 'datapegawai'])->name('pegawais');

Route::get('/tambahdata', [PegawaiController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata', [PegawaiController::class, 'insertdata'])->name('insertdata');

Route::get('editdata/{id}', [PegawaiController::class, 'editdata'])->name('editdata');
Route::post('/updatedata/{id}', [PegawaiController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [PegawaiController::class, 'delete'])->name('delete');
