<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkProgramNumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_program_nums', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('work_programs_id')->unsigned();
            $table->foreign('work_programs_id')->references('id')->on('work_programs')->onDelete('cascade');
            $table->integer('numero');
            $table->string('actividad');
            $table->string('responsable');
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
        Schema::dropIfExists('work_program_num');
    }
}
