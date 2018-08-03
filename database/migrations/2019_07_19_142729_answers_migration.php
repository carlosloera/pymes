<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnswersMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id_answers');
            $table->text('answer');
            $table->text('comment');
            $table->integer('id_question')->unsigned();
            $table->integer('id_matricula')->unsigned();
            $table->integer('id_periods')->unsigned();
            $table->foreign('id_question')->references('id_question')->on('questions')->onDelete('cascade');
            $table->foreign('id_periods')->references('id')->on('process')->onDelete('cascade');
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
        Schema::dropIfExists('answers');
    }
}
