<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersClosed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_closeds', function (Blueprint $table) {
            $table->increments('id');
            $table->text('answer');
            $table->integer('id_process')->unsigned();
            $table->integer('id_question')->length(11)->unsigned();
            $table->foreign('id_question')->references('id_question')->on('questions')->onDelete('cascade');

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
        Schema::dropIfExists('answer_closeds');
    }
}
