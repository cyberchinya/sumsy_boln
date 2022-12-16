<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $topBanner = \App\Models\Banners::where('position', 'top')
        ->where('visible', true)
        ->latest()
        ->first();
    $leftBanners = \App\Models\Banners::where('position', 'left')
        ->where('visible', true)
        ->orderBy('sort')
        ->get();

    return view('layouts.base', compact('topBanner', 'leftBanners'));
})->name('home');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor');
Route::post('/doctor', [DoctorController::class, 'store'])->name('doctor.store');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
