<?php

use App\Models\News;
use Illuminate\Support\Facades\Route;
/*use App\Http\Controllers\NewsController;*/

####
Route::get('/', function () {
    return view('layouts.base');
});

$news = News::all();
Route::get('/news', function () use ($news) {
    return view('news', ['news'=>$news]);
})->name('news');

Route::get('/doctor', function () {
    return view('doctor');
})->name('doctor');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');
