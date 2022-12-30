<?php

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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('sub_title');
            $table->string('image');
            $table->longText('content');
            $table->longText('excerpt')->nullable();
            $table->string('slug')->nullable();
            $table->string('author')->nullable();
            $table->string('original_url')->nullable();
            $table->unsignedInteger('view_count')->default(0);
            $table->unsignedInteger('word_count')->default(0);
            $table->unsignedTinyInteger('order')->default(0);
            $table->boolean('is_issued')->default(false);
            $table->timestamps();
        });

        Schema::create('post_tag', function (Blueprint $table) {
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
            $table->foreignId('tag_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
        Schema::dropIfExists('posts');
    }
};
