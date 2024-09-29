<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PribadiController;
use App\Http\Controllers\ProgdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::resource('home', HomeController::class);
Route::resource('progdi', ProgdiController::class);
Route::resource('pribadi', PribadiController::class);

Route::resource('mahasiswa', MahasiswaController::class);
Route::get('/search',[MahasiswaController::class, 'search'])->name('search');
Route::get('mahasiswa/join/{id}','App\Http\Controllers\MahasiswaController@join' );
