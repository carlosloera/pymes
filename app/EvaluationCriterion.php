<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluationCriterion extends Model
{
    //

    protected $fillable = [
        'process_id',
        'pagina1',
        'pagina1_de',
        'pagina2',
        'pagina2_de',
        'sustituye_a',
        'fecha',
        'area',
        'fecha2',
        'etapa_elemento',
        'factor',
        'indicadores',
        'documento_registro',
        'alternativa_atencion',
        'observaciones',
        'elaboro',
        'autorizo'
    ];

    public function process(){
        return $this->belongsTo('App\Process');
    }

}
