<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(100)
            ->create()->each(function (Post $post) {
                $rand = Arr::random([1, 2, 3]);
                $data = [];
                for ($i = 1; $i <= $rand; $i++) {
                    $data[] = $i;
                }
                $post->tags()->sync($data);
            });
    }
}
