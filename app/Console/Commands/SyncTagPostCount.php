<?php

namespace App\Console\Commands;

use App\Models\Tag;
use Illuminate\Console\Command;

class SyncTagPostCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:sync-tag-post-count';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '同步标签文章数';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Tag::all()->each(function (Tag $tag) {
            $tag->update(['post_count' => $tag->posts()->count()]);
        });
        
        return Command::SUCCESS;
    }
}
