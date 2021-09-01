<?php

namespace App\Http\Controllers;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        $nama = 'Muhamamad Alkaff';
        return view('news.index', compact('news', 'nama'));
    }
}
