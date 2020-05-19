<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archives', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeid')->index();
            $table->integer('ismake')->index();
            $table->integer('brandid')->nullable()->index();
            $table->integer('click')->index();
            $table->string('title')->index();
            $table->string('shorttitle')->nullable();
            $table->string('bdname')->nullable()->index();
            $table->string('flags')->nullable();
            $table->string('tags')->nullable();
            $table->integer('mid')->default(0)->index();//文档类型
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('write')->index();
            $table->string('editor')->nullable()->index();
            $table->string('litpic')->nullable()->index();
            $table->smallInteger('dutyadmin')->index();
            $table->smallInteger('editorid')->nullable()->index();
            $table->mediumText('imagepics')->nullable();//品牌图集
            $table->text('body')->nullable();
            $table->timestamp('published_at')->nullable();//预选发布时间
            $table->string('url')->unique();
            $table->integer('ispush')->default(0)->index();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('archives');
    }
}
