<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

    public function add() {
        return view('news.add');
    }

    public function store(Request $request) {
        News::create([
            'slug' => \Str::slug($request->title),
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        return redirect()->route('backend_news_index');
    }
}
