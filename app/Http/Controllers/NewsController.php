<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function homepage() {
        $news = News::latest()->take(3)->get();
        return view('homepage', compact('news'));
    }

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
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required'
        ]);

        $path = $request->image->store('images');

        if($validated) {
            News::create([
                'slug' => \Str::slug($request->title),
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'image' => $path
            ]);
        }

        return redirect()->route('backend_news_index');
    }

    public function edit($id) {
        $new = News::where('id', '=', $id)->first();
        return view('news.edit', compact('new'));
    }

    public function update(Request $request, $id) {
        $new = News::where('id', '=', $id)->first();

        $new->update([
            'slug' => \Str::slug($request->title),
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        return redirect()->route('backend_news_index');
    }

    public function delete($id) {
        $new = News::where('id', '=', $id)->first();
        $new->delete();

        return redirect()->route('backend_news_index');
    }

}
