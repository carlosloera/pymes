<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinalEvaluationCriterion extends Model
{
    //

    protected $fillable = [
            'process_id',
            'fecha',
            'pagina',
            'pagina_de',
            'establecidos_planeacion',
            'obtenidos_planeacion',
            'establecidos_organizacion',
            'obtenidos_organizacion',
            'establecidos_direccion',
            'obtenidos_direccion',
            'establecidos_control',
            'obtenidos_control',

    ];

    public function process(){
        return $this->belongsTo('App\Process');
    }
}
