<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentalAnalises extends Model
{
    //
    protected $fillable = [
        'process_id',
        'fecha',
        'num_hoja',
        'num_hoja_de',
        'responsable',
        'funcion',
        'area',
        'documento',
        'resultados_analisis',
        'propuesta',
        'observaciones',
        'elabora',
        'autorizo',

    ];

    public function process(){
        return $this->belongsTo('App\Process');
    }
}
