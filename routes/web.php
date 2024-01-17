<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'main']);
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('posts', [PageController::class, 'index'])->name('posts.index');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('new', [PageController::class, 'new'])->name('new');
Route::get('team', [PageController::class, 'team'])->name('team');

Route::resource(
    'posts', PostController::class,
    );
