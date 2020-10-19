<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\ArchiveService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function show(Category $category, ArchiveService $archiveService)
    {
        $param = [
            'path' => route('categories.show', $category->id),
            'category_id' => $category->id,
        ];
        $posts = $archiveService->getPostList($param);

        return view('categories.show', compact('posts'))->with('currentModel', $category);
    }
}
