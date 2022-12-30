<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class SyncPostVisitCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:sync-post-visit-count';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '同步文章点击数';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Post::all()->each(function (Post $post) {
            $post->update(['view_count' => $post->visits()->count()]);
        });

        return Command::SUCCESS;
    }
}
