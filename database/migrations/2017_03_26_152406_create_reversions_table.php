<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReversionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reversions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ask_id')->index();
            $table->integer('answer_id')->index();
            $table->integer('user_id')->index();
            $table->text('content');
            $table->integer('goodpost')->index();
            $table->integer('is_hidden')->default(0)->index();
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
        Schema::dropIfExists('reversions');
    }
}
