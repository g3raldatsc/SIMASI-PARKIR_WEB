<?php

use Illuminate\Support\Facades\Route;

// Modul Sofyan: beranda, pencarian plat, peta, kendaraan, laporan okupansi

// sementaranya ini --> halaman uji. Anggota 4 akan menggantinya dengan beranda yang sebenarnya.
Route::get('/', function () {
    return 'SIMASI-PARKIR Web berjalan.';
})->name('home');
