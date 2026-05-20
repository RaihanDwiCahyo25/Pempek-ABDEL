<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdvantageController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\HomepageSettingController;
use App\Http\Controllers\Admin\StoreInfoController;
use App\Models\Advantage;
use App\Models\HeroSection;
use App\Models\HomepageSetting;
use App\Models\StoreInfo;

// Mode Frontend Sementara (Tanpa Controller & Middleware Auth)

Route::get('/', function () {
    $heroSection = HeroSection::active()->first();
    $homepageSetting = HomepageSetting::first();
    $storeInfos = StoreInfo::ordered()->get();
    $advantages = Advantage::active()->ordered()->get();

    return view('welcome', compact('heroSection', 'homepageSetting', 'storeInfos', 'advantages'));
});

Route::get('/admin', function () {
    return view('login'); 
})->name('login');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('hero-sections', HeroSectionController::class);
    Route::resource('store-infos', StoreInfoController::class);
    Route::resource('advantages', AdvantageController::class);

    Route::get('kelola-beranda', [HomepageSettingController::class, 'edit'])->name('beranda');
    Route::post('kelola-beranda', [HomepageSettingController::class, 'update'])->name('beranda.save');

    Route::get('kelola-katalog', function () {
        return view('kelolakatalog');
    })->name('katalog');

    Route::get('kelola-tentang', function () {
        return view('kelolatentang');
    })->name('tentang');

    Route::get('kelola-kemitraan', function () {
        return view('kelolakemitraan');
    })->name('kemitraan');

    Route::get('kelola-testimoni', function () {
        return view('kelolatestimoni');
    })->name('testimoni');
});
