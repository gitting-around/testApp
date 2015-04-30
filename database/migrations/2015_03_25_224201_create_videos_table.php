<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->string('description', 500);
            $table->string('author', 50);
            $table->string('image_url', 50);
            $table->string('video_url', 50);
            $table->string('format_film', 20);
            $table->timestamp('published_at');
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
        Schema::drop('Videos');
    }
}
