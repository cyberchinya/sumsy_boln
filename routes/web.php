<?php

use Illuminate\Support\Facades\Route;
/*use App\Http\Controllers\NewsController;*/

####
Route::get('/', function () {
    return view('layouts.base');
});

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/doctor', function () {
    return view('doctor');
})->name('doctor');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');
