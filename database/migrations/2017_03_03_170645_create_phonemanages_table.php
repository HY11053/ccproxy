<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonemanagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phonemanages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('phoneno',11)->index();
            $table->string('note')->nullable();
            $table->string('host')->nullable()->index();
            $table->string('referer')->nullable()->index();
            $table->string('adgroup')->nullable()->index();//推广计划
            $table->string('adunit')->nullable()->index();//推广单元
            $table->string('keywords')->nullable()->index();//搜索关键词
            $table->string('adkeywords')->nullable()->index();//匹配关键词
            $table->ipAddress('ip')->nullable()->index();
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
        Schema::dropIfExists('phonemanages');
    }
}
