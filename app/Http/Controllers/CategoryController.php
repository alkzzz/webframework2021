<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function backend_index()
    {
        $daftar_kategori = Category::all();
        return view('category.backend_index', compact('daftar_kategori'));
    }
}
