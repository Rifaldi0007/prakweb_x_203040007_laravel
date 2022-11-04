<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
<<<<<<< HEAD
            "title" => "All Posts",
            "active" => 'posts',
            //"posts" => Post::all()
            "posts" => Post::with(['author', 'category'])->latest()->get(),
=======
            "title" => "All Post",
            "active" => 'posts',
            //"posts" => Post::all()
            //"posts" => Post::with(['author', 'category'])->latest()->get(),
>>>>>>> main
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "single post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
