<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentReversionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_reversions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comment_id')->index();
            $table->integer('archive_id')->index();
            $table->integer('user_id')->index();
            $table->integer('goodpost')->default(0)->index();
            $table->integer('is_hidden')->default(0)->index();
            $table->text('content');
            $table->ipAddress('ip')->index();
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
        Schema::dropIfExists('comment_reversions');
    }
}
