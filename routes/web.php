<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdvantageController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\HomepageSettingController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StoreInfoController;
use App\Http\Controllers\Admin\TentangKamiController;
use App\Http\Controllers\CatalogController;
use App\Models\Advantage;
use App\Models\HeroSection;
use App\Models\HomepageSetting;
use App\Models\Product;
use App\Models\StoreInfo;
use App\Models\TentangKami;

// ==========================================
// Mode Frontend Sementara
// ==========================================

// 1. Halaman Beranda
Route::get('/', function () {
    $heroSection = HeroSection::active()->first();
    $homepageSetting = HomepageSetting::first();
    $storeInfos = StoreInfo::ordered()->get();
    
    // Ubah 'welcome' menjadi 'beranda' agar sesuai dengan nama file beranda.blade.php
    return view('beranda', compact('heroSection', 'homepageSetting', 'storeInfos'));
})->name('beranda');

// 2. Halaman Katalog (Sudah menggunakan Controller)
Route::get('/katalog', [CatalogController::class, 'index'])->name('katalog');

// 3. Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    $tentangKami = TentangKami::first();
    $homepageSetting = HomepageSetting::first();
    return view('tentang', compact('tentangKami', 'homepageSetting'));
})->name('tentang');

// 4. Halaman Kemitraan & Info
Route::get('/kemitraan', function () {
    $homepageSetting = HomepageSetting::first();
    $advantages = Advantage::active()->ordered()->get(); // Pindahkan ke sini
    
    return view('kemitraan', compact('homepageSetting', 'advantages'));
})->name('kemitraan');


// ==========================================
// Mode Backend / Admin
// ==========================================

Route::get('/admin', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('login.authenticate');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

// Password Reset Routes
Route::get('/admin/forgot-password', [\App\Http\Controllers\Admin\PasswordResetController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/admin/forgot-password', [\App\Http\Controllers\Admin\PasswordResetController::class, 'sendResetLink'])->name('password.send-reset-link');
Route::get('/admin/reset-password/{token}', [\App\Http\Controllers\Admin\PasswordResetController::class, 'showResetForm'])->name('password.reset.form');
Route::post('/admin/reset-password', [\App\Http\Controllers\Admin\PasswordResetController::class, 'resetPassword'])->name('password.reset');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::resource('hero-sections', HeroSectionController::class);
    Route::resource('store-infos', StoreInfoController::class);
    Route::resource('advantages', AdvantageController::class);
    
    Route::get('kelola-beranda', [HomepageSettingController::class, 'edit'])->name('beranda');
    Route::post('kelola-beranda', [HomepageSettingController::class, 'update'])->name('beranda.save');

    Route::get('kelola-katalog', [ProductController::class, 'index'])->name('katalog');
    Route::resource('products', ProductController::class)->except(['show']);

    Route::get('kelola-tentang', [TentangKamiController::class, 'edit'])->name('tentang');
    Route::post('kelola-tentang', [TentangKamiController::class, 'update'])->name('tentang.save');
    Route::delete('kelola-tentang/image', [TentangKamiController::class, 'deleteImage'])->name('tentang.deleteImage');

    Route::get('kelola-kemitraan', [HomepageSettingController::class, 'editKemitraan'])->name('kemitraan');
    Route::post('kelola-kemitraan', [HomepageSettingController::class, 'updateKemitraan'])->name('kemitraan.save');
});