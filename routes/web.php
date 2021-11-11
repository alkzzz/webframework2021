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
Route::get('/', [NewsController::class, 'homepage'])->name('homepage');

# BREAD NEWS (Browse, Read, Edit, Add, Delete)
Route::get('/news', [NewsController::class, 'frontend_index'])->name('frontend_news_index');

# BackEnd

Route::group(['prefix' =>'dashboard', 'middleware' => 'auth'], function() {

    Route::get('/', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/news', [NewsController::class, 'backend_index'])->name('backend_news_index');

    Route::get('/news/add', [NewsController::class, 'add'])->name('add_news');
    Route::post('/news/store', [NewsController::class, 'store'])->name('store_news');

    #Edit dan Update
    Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('edit_news');
    Route::patch('/news/update/{id}', [NewsController::class, 'update'])->name('update_news');

    #Delete
    Route::delete('/news/delete/{id}', [NewsController::class, 'delete'])->name('delete_news');
});

Auth::routes(
    ['register' => false,
    'reset' => false,
    'verify' => false,
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
