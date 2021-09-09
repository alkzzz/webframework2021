<?php

namespace App\Http\Controllers;
use App\Models\News;

class NewsController extends Controller
{
    public function frontend_index()
    {
        $news = News::all();
        return view('news.frontend_index', compact('news'));
    }

    public function backend_index()
    {
        $news = News::all();
        return view('news.backend_index', compact('news'));
    }
}
