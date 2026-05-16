<?php

use Illuminate\Support\Facades\Route;

// Mode Frontend Sementara (Tanpa Controller & Middleware Auth)

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/admin', function () {
    return view('login'); 
})->name('login');

Route::get('/admin/kelola-beranda', function () {
    return view('kelolaberanda'); 
})->name('admin.beranda');

// Trik baru: Tambahkan rute ini untuk halaman Kelola Katalog Produk
Route::get('/admin/kelola-katalog', function () {
    return view('kelolakatalog'); 
})->name('admin.katalog');

// Rute Kelola Tentang Kami
Route::get('/admin/kelola-tentang', function () {
    return view('kelolatentang'); 
})->name('admin.tentang');

// Rute Kelola Kemitraan & Info
Route::get('/admin/kelola-kemitraan', function () {
    return view('kelolakemitraan'); 
})->name('admin.kemitraan');

// Rute Kelola Testimoni
Route::get('/admin/kelola-testimoni', function () {
    return view('kelolatestimoni'); 
})->name('admin.testimoni');