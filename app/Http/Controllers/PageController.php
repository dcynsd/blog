<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function root()
    {
        $posts = Post::query()
            ->with('tags', 'category')
            ->orderByDesc('order')
            ->latest()
            ->paginate(10);

        return view('pages.root', compact('posts'));
    }
}
