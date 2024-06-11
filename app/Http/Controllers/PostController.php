<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Single post",
            "posts" => \App\Models\Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Single post",
            "post" => \App\Models\Post::find($slug)
        ]);
    }
}
