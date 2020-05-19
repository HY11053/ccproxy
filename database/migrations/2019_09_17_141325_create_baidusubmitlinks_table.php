<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaidusubmitlinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baidusubmitlinks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('remain')->default(0)->index();
            $table->integer('success')->default(0);
            $table->integer('success_realtime')->default(0)->index();
            $table->integer('remain_realtime')->default(0)->index();
            $table->string('type')->nullable()->index();
            $table->integer('error')->default(0);
            $table->integer('mid')->default(0)->index();
            $table->string('message')->nullable();
            $table->string('url')->nullable()->index();
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
        Schema::dropIfExists('baidusubmitlinks');
    }
}
