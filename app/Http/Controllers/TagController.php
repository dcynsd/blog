<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Services\ArchiveService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class TagController extends Controller
{
    const COLOR_MAP = [
        '#bbe', '#6090c9', '#337ab7', '#8ea5dc',
    ];

    public function index(Request $request)
    {
        $total = Tag::query()->sum('post_count');
        $tags = Tag::all()->map(function (Tag $tag) use ($total) {
            $tag->color = Arr::random(self::COLOR_MAP);
            $tag->size = $tag->post_count ? round($tag->post_count / $total * 100, 1) : 18;
            return $tag;
        })->shuffle();

        return view('tags.index', compact('tags'));
    }

    public function show(Tag $tag, ArchiveService $archiveService)
    {
        $param = [
            'path' => route('tags.show', $tag->id),
            'tag_id' => $tag->id,
        ];
        $posts = $archiveService->getPostList($param);

        return view('tags.show', compact('posts'))->with('currentModel', $tag);
    }
}
