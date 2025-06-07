<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PasienController;
Route::get('/pasien/show',
    [PasienController::class, 'show']
);
