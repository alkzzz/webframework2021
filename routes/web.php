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
