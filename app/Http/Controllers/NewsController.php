<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;

class NewsController extends Controller
{
    public function homepage() {
        $news = News::latest()->take(3)->get();

        // One to one
        $user = User::find(5);

        // One to many
        $international = Category::where('name', 'Internasional')->first();
        // $international_news = News::where('category_id', $international->id)->get();
        $international_news = $international->news;
        // dd($international_news);

        return view('homepage', compact('news', 'user'));
    }

    public function frontend_index()
    {
        $news = News::all();
        return view('news.frontend_index', compact('news'));
    }

    public function backend_index()
    {
        $news = News::with('category')->get();
        return view('news.backend_index', compact('news'));
    }

    public function add() {
        $daftar_kategori = Category::all();
        return view('news.add', compact('daftar_kategori'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'image' => 'required'
        ]);

        $path = $request->image->store('images');

        if($validated) {
            News::create([
                'slug' => \Str::slug($request->title),
                'title' => $request->input('title'),
                'category_id' => $request->input('category_id'),
                'content' => $request->input('content'),
                'image' => $path
            ]);
        }

        return redirect()->route('backend_news_index');
    }

    public function edit($id) {
        $new = News::where('id', '=', $id)->first();
        $daftar_kategori = Category::all();
        return view('news.edit', compact('new', 'daftar_kategori'));
    }

    public function update(Request $request, $id) {
        $new = News::where('id', '=', $id)->first();

        $new->update([
            'slug' => \Str::slug($request->title),
            'title' => $request->input('title'),
            'category_id' => $request->input('category_id'),
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
