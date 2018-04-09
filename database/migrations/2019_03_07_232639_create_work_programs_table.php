<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('process_id')->unsigned();
            $table->foreign('process_id')->references('id')->on('processes');
            $table->string('area');
            $table->date('inicio');
            $table->date('terminacion');
            $table->date('suspencion');
            $table->date('cancelacion');
            $table->date('reinicio');
            $table->date('terminacion2');
            $table->string('responsable');
            $table->string('clave');
            $table->string('observaciones');
            $table->string('elaboro');
            $table->string('reviso');
            $table->string('autorizo');
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
        Schema::dropIfExists('work_programs');
    }
}
