<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $data = [
            [
                'name' => '生活感悟',
            ],
            [
                'name' => '技术分享',
            ],
            [
                'name' => '学习笔记',
            ],
            [
                'name' => '应用工具',
            ],
        ];
        DB::table('categories')->insert($data);

        $data = [
            ['name' => 'PHP'],
            ['name' => 'Laravel'],
            ['name' => 'Mac'],
        ];
        DB::table('tags')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();
        DB::table('tags')->truncate();
    }
};
