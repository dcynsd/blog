<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PageController::class, 'root'])->name('root');
Route::get('/archives', [\App\Http\Controllers\ArchiveController::class, 'index'])->name('archives.index');
// Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
Route::get('/links', [\App\Http\Controllers\LinkController::class, 'index'])->name('links.index');

Route::get('/posts/{post}/{slug?}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');

Route::get('/tags', [\App\Http\Controllers\TagController::class, 'index'])->name('tags.index');
Route::get('/tags/{tag}', [\App\Http\Controllers\TagController::class, 'show'])->name('tags.show');

Route::get('/search', [\App\Http\Controllers\PageController::class, 'search'])->name('posts.search');
