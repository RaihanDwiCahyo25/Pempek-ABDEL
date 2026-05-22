<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdvantageController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\HomepageSettingController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StoreInfoController;
use App\Http\Controllers\CatalogController;
use App\Models\Advantage;
use App\Models\HeroSection;
use App\Models\HomepageSetting;
use App\Models\Product;
use App\Models\StoreInfo;

// Mode Frontend Sementara (Tanpa Controller & Middleware Auth)

Route::get('/', function () {
    $heroSection = HeroSection::active()->first();
    $homepageSetting = HomepageSetting::first();
    $storeInfos = StoreInfo::ordered()->get();
    $advantages = Advantage::active()->ordered()->get();
    $products = Product::active()->ordered()->take(6)->get();

    return view('welcome', compact('heroSection', 'homepageSetting', 'storeInfos', 'advantages', 'products'));
});

Route::get('/katalog', [CatalogController::class, 'index'])->name('katalog');

Route::get('/admin', function () {
    return view('login'); 
})->name('login');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('hero-sections', HeroSectionController::class);
    Route::resource('store-infos', StoreInfoController::class);
    Route::resource('advantages', AdvantageController::class);
    Route::get('kelola-beranda', [HomepageSettingController::class, 'edit'])->name('beranda');
    Route::post('kelola-beranda', [HomepageSettingController::class, 'update'])->name('beranda.save');

    Route::get('kelola-katalog', [ProductController::class, 'index'])->name('katalog');
    Route::resource('products', ProductController::class)->except(['show']);

    Route::get('kelola-tentang', function () {
        return view('kelolatentang');
    })->name('tentang');

    Route::get('kelola-kemitraan', function () {
        return view('kelolakemitraan');
    })->name('kemitraan');
});
