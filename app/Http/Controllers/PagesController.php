<?php

namespace App\Http\Controllers;

use A17\Twill\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function posts() {

        $posts = Post::where('published', 1)->get();
        return view('posts.index', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::forSlug($slug)->first();
        return view('posts.show', compact('post'));
    }

    public function tag($slug)
    {
        $tags = Post::withTag($slug)->get();
        return view('tags.index', compact('tags', 'slug'));
    }
}
