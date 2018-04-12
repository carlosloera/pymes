<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentalAnalisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documental_analises', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('process_id')->unsigned();
            $table->foreign('process_id')->references('id')->on('processes')->onDelete('cascade');
            $table->date('fecha')->nullable();
            $table->string('num_hoja');
            $table->string('num_hoja_de');
            $table->string('responsable');
            $table->string('funcion');
            $table->string('area');
            $table->longText('documento');
            $table->longText('resultados_analisis');
            $table->longText('propuesta');
            $table->longText('observaciones');
            $table->string('elabora');
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
        Schema::dropIfExists('documental_analises');
    }
}
