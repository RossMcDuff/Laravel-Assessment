<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;

class PostsController extends Controller
{
    public function index() {

        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->simplePaginate(6)->withQueryString()
        ]);

    }

    public function show(Post $post) {

        return view('posts.show', [
            'post' => $post
        ]);

    }
}
