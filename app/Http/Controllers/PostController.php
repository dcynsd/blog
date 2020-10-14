<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $last = Post::where('id', '<', $post->id)->latest('id')->first();
        $next = Post::where('id', '>', $post->id)->oldest('id')->first();
        return view('posts.show', compact('post', 'last', 'next'))->with('currentPost', $post);
    }
}
