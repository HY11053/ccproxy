<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandcontainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brandcontainers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand')->index();
            $table->string('type')->index();
            $table->integer('status')->index();
            $table->integer('num')->index();
            $table->string('url')->index();
            $table->string('referer')->index();
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
        Schema::dropIfExists('brandcontainers');
    }
}
