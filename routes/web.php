<?php

use App\Http\Controllers\ProgdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('progdi', ProgdiController::class);
