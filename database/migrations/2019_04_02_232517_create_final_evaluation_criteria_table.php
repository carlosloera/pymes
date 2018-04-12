<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinalEvaluationCriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('final_evaluation_criteria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('process_id')->unsigned();
            $table->foreign('process_id')->references('id')->on('processes')->onDelete('cascade');
            $table->date('fecha');
            $table->string('pagina');
            $table->string('pagina_de');
            $table->string('establecidos_planeacion');
            $table->string('obtenidos_planeacion');
            $table->string('establecidos_organizacion');
            $table->string('obtenidos_organizacion');
            $table->string('establecidos_direccion');
            $table->string('obtenidos_direccion');
            $table->string('establecidos_control');
            $table->string('obtenidos_control');
            
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
        Schema::dropIfExists('final_evaluation_criteria');
    }
}
