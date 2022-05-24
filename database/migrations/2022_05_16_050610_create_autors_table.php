<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blg-autors', function (Blueprint $table) {
            $table->bigIncrements('autor_id');
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('city');
            $table->string('semester');
            $table->string('program');
            $table->tinyInteger('state')->default(1);
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blg-autors');
    }
}
