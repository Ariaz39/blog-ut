<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blg-blogs', function (Blueprint $table) {
            $table->bigIncrements('blog_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('autor_id');
            $table->string('image');
            $table->string('title');
            $table->string('content');
            $table->tinyInteger('state');
            $table->dateTime('created_at');

            $table->foreign('category_id')->references('category_id')->on('blg-categories');
            $table->foreign('autor_id')->references('autor_id')->on('blg-autors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blg-blogs');
    }
}
