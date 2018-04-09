<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationCriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_criteria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('process_id')->unsigned();
            $table->foreign('process_id')->references('id')->on('processes');
            $table->string('pagina1');
            $table->string('pagina1_de');
            $table->string('pagina2');
            $table->string('pagina2_de');
            $table->string('sustituye_a');
            $table->date('fecha');
            $table->date('fecha2');
            $table->string('area');
            $table->string('etapa_elemento');
            $table->longText('factor');
            $table->longText('indicadores');
            $table->longText('documento_registro');
            $table->longText('alternativa_atencion');
            $table->longText('observaciones');
            $table->string('elaboro');
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
        Schema::dropIfExists('evaluation_criteria');
    }
}
