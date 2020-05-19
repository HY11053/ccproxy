<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('title');
            $table->text('body')->nullable();
            $table->integer('viewnum')->default(0)->index();
            $table->integer('answernum')->default(0)->index();
            $table->integer('is_hidden')->default(0)->index();
            $table->ipAddress('ip')->nullable()->index();
            $table->string('tags')->nullable();
            $table->integer('goodpost')->default(0)->index();
            $table->integer('mid')->default(0)->index();
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
        Schema::dropIfExists('asks');
    }
}
