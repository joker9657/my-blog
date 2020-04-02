<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)->comment('标题');
            $table->text('content')->comment('内容');
            $table->integer('category_id')->comment('分类ID');
            $table->string('introduction')->comment('简介');
            $table->string('slug')->comment('英文标题');
            $table->integer('clicks')->unsigned()->default(0)->comment('点击数');
            $table->integer('sorting')->unsigned()->default(0)->comment('排序');
            $table->softDeletes(); // 设置软删除
            $table->timestamps();
        });
        \DB::statement("ALTER TABLE `articles` comment'博客表'"); // 表注释
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
