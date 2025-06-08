<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Selamat Datang di STT - NF";
});

Route::get('/hallo/{nama}/{kota}', function($nama, $kota) {
    return "Halo Apa Kabar $nama dari $kota";
});

Route::get('/profil', function (){
    return view('profil');
});

use App\Http\Controllers\DashboardController;
Route::get('/dashboard', [DashboardController::class, 'show']);

Route::redirect('/admin', '/dashboard');

use App\Http\Controllers\AdminController;
Route::get('/admin', [AdminController::class, 'index']);

//use App\Http\Controllers\PasienController;
//Route::get('/pasien/show',
//    [PasienController::class, 'show']
//);


