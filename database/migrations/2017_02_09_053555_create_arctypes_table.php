<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArctypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arctypes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reid')->default(0)->index();
            $table->integer('topid')->default(0)->index();
            $table->integer('sortrank')->nullable()->index();
            $table->string('typename')->nullable()->index();
            $table->string('typedir')->index();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->smallInteger('dirposition')->default(1)->index();
            $table->integer('is_write')->index();
            $table->string('real_path')->unique()->index();
            $table->string('litpic')->nullable();
            $table->text('typeimages')->nullable();
            $table->text('body')->nullable();
            $table->integer('mid')->default(1)->index();
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
        Schema::drop('arctypes');
    }
}
