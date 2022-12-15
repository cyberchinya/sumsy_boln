<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.base');
});

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor');
Route::post('/doctor', [DoctorController::class, 'store'])->name('doctor.store');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
