<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function root()
    {
        $posts = Post::query()
            ->where('is_issued', true)
            ->paginate(5);

        return view('pages.root', compact('posts'));
    }
}
