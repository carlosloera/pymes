<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecordFind extends Model
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
        'fecha2',
        'area',
        'etapa_elemento',
        'numero',
        'hallazgo',
        'evidencias',
        'aspectos_solidos',
        'aspectos_mejorar',
        'observaciones',
        'elabora',
        'autorizo',

    ];

    
}
