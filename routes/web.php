<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

####
Route::get('/', function () {
    return view('layouts.base');
});

Route::get('/news', function (){
    return view('news');
})->name('news');


