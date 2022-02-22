<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function posts() {
        $posts = Post::where('published', 1)->get();
        return view('posts.index', compact('posts'));
    }
}
