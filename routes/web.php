<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PribadiController;
use App\Http\Controllers\ProgdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('progdi', ProgdiController::class);
Route::resource('pribadi', PribadiController::class);
Route::resource('mahasiswa', MahasiswaController::class);
