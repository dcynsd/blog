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
                'name' => '首页',
                'sub_title' => 'Coding is an art.',
                'url' => '/',
                'icon' => 'icon-home-fill',
                'image' => 'https://rmt.dogedoge.com/fetch/fluid/storage/bg/vdysjx.png?w=1920',
                'height' => '100vh',
                'is_scroll_down_bar' => true,
            ],
            [
                'name' => '归档',
                'sub_title' => '归档',
                'url' => '/archives',
                'icon' => 'icon-archive-fill',
                'image' => 'https://rmt.dogedoge.com/fetch/fluid/storage/bg/1cm6iu.png?w=1920',
                'height' => '60vh',
                'is_scroll_down_bar' => false,
            ],
            [
                'name' => '分类',
                'sub_title' => '分类',
                'url' => '/categories',
                'icon' => 'icon-category-fill',
                'image' => 'https://rmt.dogedoge.com/fetch/fluid/storage/bg/sdqryn.png?w=1920',
                'height' => '60vh',
                'is_scroll_down_bar' => false,
            ],
            [
                'name' => '标签',
                'sub_title' => '标签',
                'url' => '/tags',
                'icon' => 'icon-tags-fill',
                'image' => 'https://rmt.dogedoge.com/fetch/fluid/storage/bg/n7a9bv.png?w=1920',
                'height' => '60vh',
                'is_scroll_down_bar' => false,
            ],
            [
                'name' => '文档',
                'sub_title' => '文档',
                'url' => '/docs',
                'icon' => 'icon-books',
                'image' => 'https://rmt.dogedoge.com/fetch/fluid/storage/bg/4xvpqo.png?w=1920',
                'height' => '60vh',
                'is_scroll_down_bar' => false,
            ],
            [
                'name' => '友链',
                'sub_title' => '友链',
                'url' => '/links',
                'icon' => 'icon-link-fill',
                'image' => 'https://rmt.dogedoge.com/fetch/fluid/storage/bg/73twhs.png?w=1920',
                'height' => '60vh',
                'is_scroll_down_bar' => false,
            ],
        ];

        DB::table('navigations')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('navigations')->truncate();
    }
};
