<?php

use Illuminate\Support\Facades\Route;
// Baris di bawah ini SANGAT PENTING untuk menghubungkan rute ke Controller
use App\Http\Controllers\PostController; 

Route::get('/post', [PostController::class, 'index']);
use App\Http\Controllers\ArticleController;

Route::get('/artikel', [ArticleController::class, 'index'])->name('articles.index');