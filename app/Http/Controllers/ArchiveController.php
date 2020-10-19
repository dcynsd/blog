<?php

namespace App\Http\Controllers;

use App\Services\ArchiveService;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function index(Request $request, ArchiveService $archiveService)
    {
        $posts = $archiveService->getPostList(['path' => route('archives.index', false)]);

        return view('archives.index', compact('posts'));
    }
}
