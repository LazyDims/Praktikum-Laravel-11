<?php

use App\Http\Controllers\PribadiController;
use App\Http\Controllers\ProgdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('views/mahsiswa', function () {
    return view('index');
});

Route::resource('progdi', ProgdiController::class);
Route::resource('pribadi', PribadiController::class);
