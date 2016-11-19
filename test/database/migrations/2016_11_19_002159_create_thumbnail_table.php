<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThumbnailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thumbnails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thumbnail_id')->unsigned();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('image_path')->nullable();
            $table->string('button')->nullable();
            $table->string('href')->nullable();            
            $table->string('comment')->nullable();
            $table->string('section')->nullable();
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
        Schema::dropIfExists('thumbnails');
    }
}
