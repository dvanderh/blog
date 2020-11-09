<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Show the index page
     */
    public function index()
    {
        $posts = Post::get();

        return view('home.index', [
            'posts' => $posts,
        ]);
    }
}