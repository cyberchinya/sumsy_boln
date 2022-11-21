<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
   public function news()
   {
       $news = News::all();

       return view('news', [
           'news' => $news,
       ]);
   }
}