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

    public function search(Request $request)
    {
        if (! $q = $request->input('q')) {
            return response()->json(['code' => -1, 'msg' => '请输入搜索关键字']);
        }

        $posts = Post::search($q)
            ->get()
            ->map(function (Post $post) use ($q) {
                $post->url = $post->link();
                return $post;
            });

        return response()->json(['code' => 1, 'data' => $posts]);
    }
}
