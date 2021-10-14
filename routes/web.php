<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# FrontEnd
Route::get('/', function () {
    return view('index');
})->name('homepage');

# BREAD NEWS (Browse, Read, Edit, Add, Delete)
Route::get('/news', [NewsController::class, 'frontend_index'])->name('frontend_news_index');

# BackEnd
Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard/news', [NewsController::class, 'backend_index'])->name('backend_news_index');

Route::get('/dashboard/news/add', [NewsController::class, 'add'])->name('add_news');
Route::post('/dashboard/news/store', [NewsController::class, 'store'])->name('store_news');

#Edit dan Update
Route::get('/dashboard/news/edit/{id}', [NewsController::class, 'edit'])->name('edit_news');
Route::patch('/dashboard/news/update/{id}', [NewsController::class, 'update'])->name('update_news');

#Delete
Route::delete('/dashboard/news/delete/{id}', [NewsController::class, 'delete'])->name('delete_news');
