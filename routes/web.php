<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ProdiController;
use App\Models\Fakultas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('/fakultas', FakultasController::class);
Route::resource('fakultas',FakultasController::class)
       ->parameters([
           'fakultas' => 'fakultas'
           ]);//ubah parameter route menjadi fakultas(awalnya fakultas/{fakulta} menjadi fakultas/{fakultas})


Route::resource('/periode', PeriodeController::class);
Route::resource('/prodi', ProdiController::class);
Route::resource('/mahasiswa',MahasiswaController::class);
