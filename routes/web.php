<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdvantageController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\StoreInfoController;
use App\Models\Advantage;
use App\Models\HeroSection;
use App\Models\StoreInfo;

Route::get('/', function () {
    $heroSection = HeroSection::active()->first();
    $storeInfos = StoreInfo::ordered()->get();
    $advantages = Advantage::active()->ordered()->get();

    return view('welcome', compact('heroSection', 'storeInfos', 'advantages'));
});

Route::get('/admin', function () {
    return view('login');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('hero-sections', HeroSectionController::class);
    Route::resource('store-infos', StoreInfoController::class);
    Route::resource('advantages', AdvantageController::class);
});