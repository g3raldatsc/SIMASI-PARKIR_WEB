<?php

use Illuminate\Support\Facades\Route;

// Modul Gerald: login, logout, dashboard, pengguna

// sementara doang ini halaman uji layout. Dihapus nanti di akhir Tahap 5.
Route::view('/uji/panel', 'uji.panel');
Route::get('/uji/flash', function () {
    return redirect('/uji/panel')
        ->with('success', 'Pesan sukses tampil otomatis dan hilang sendiri.')
        ->with('error', 'Ini contoh pesan kesalahan.');
});
