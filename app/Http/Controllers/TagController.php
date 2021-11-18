<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
Use App\Models\Tags;

class TagController extends Controller
{
    public function backend_index()
    {
        $new = News::find(1);
        $tag = Tags::find(1);
        return view('tags.backend_index', compact('new', 'tag'));
    }
}
