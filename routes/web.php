<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\AdminPostsController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', [PostsController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostsController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('admin/posts', [AdminPostsController::class, 'index'])->middleware('can:admin');
Route::get('admin/posts/create', [AdminPostsController::class, 'create'])->middleware('can:admin');
Route::post('admin/posts', [AdminPostsController::class, 'store'])->middleware('can:admin');
Route::get('admin/posts/{post}/edit', [AdminPostsController::class, 'edit'])->middleware('can:admin');
Route::patch('admin/posts/{post}', [AdminPostsController::class, 'update'])->middleware('can:admin');
Route::delete('admin/posts/{post}', [AdminPostsController::class, 'destroy'])->middleware('can:admin');
