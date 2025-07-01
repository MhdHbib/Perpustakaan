<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman utama (dashboard)
Route::get('/', function () {
    return view('dashboard');
});

// Route untuk katalog buku
Route::get('/katalog-buku', function () {
    return view('katalog-buku');
});

// Route untuk profil pengguna
Route::get('/profil-pengguna', function () {
    return view('profil-pengguna');
});

// Route untuk halaman menu utama
Route::get('/menu', function () {
    return view('Untitled-1');
});
