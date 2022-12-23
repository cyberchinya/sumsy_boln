<?php

use App\Http\Controllers\ThanksController;
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
Route::get('/thanks', [ThanksController::class, 'index'])->name('thanks');
Route::post('/thanks', [ThanksController::class, 'store'])->name('thanks.store');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
