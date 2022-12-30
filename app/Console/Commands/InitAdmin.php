<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class InitAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:init-admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '初始化后台';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('admin:install');

        DB::unprepared(file_get_contents(public_path('admin_menu.sql')));
    }
}
