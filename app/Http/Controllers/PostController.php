<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post, Request $request)
    {
        if ( ! empty($post->slug) && $post->slug != $request->slug) {
            return redirect($post->link(), 301);
        }

        $last = $post->getLastPage();
        $next = $post->getNextPage();

        $post->visits()->increment();

        return view('posts.show', compact('post', 'last', 'next'))->with('currentPost', $post);
    }
}
