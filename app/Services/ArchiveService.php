<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;

class ArchiveService
{
    public function getPostList(array $param)
    {
        $builder = Post::query();

        if (isset($param['category_id'])) {
            $builder->where('category_id', $param['category_id']);
        }

        if (isset($param['tag_id'])) {
            $builder->where(function ($query) use ($param) {
                return $query->whereHas('tags', function ($query) use ($param) {
                    return $query->where('id', $param['tag_id']);
                });
            });
        }

        $posts = $builder
            ->latest()
            ->paginate();

        $data = [];
        foreach ($posts->items() as $item) {
            // 按年分组
            $data[$item->created_at->year][] = $item;
        }

        // 重新组装分页
        return new LengthAwarePaginator($data, $posts->total(), 15, request()->page, [
            'path' => $param['path'],
        ]);
    }
}
