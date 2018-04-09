<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaultDetectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failure_detections', function (Blueprint $table) {
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
            $table->integer('numero');
            $table->longText('falla');
            $table->longText('propuesta');
            $table->longText('seguimiento');
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
        Schema::dropIfExists('fault_detections');
    }
}
