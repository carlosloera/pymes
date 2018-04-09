<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FailureDetection extends Model
{
    //
    protected $fillable = [
        'process_id',
        'pagina1',
        'pagina1_de',
        'pagina2',
        'pagina2_de',
        'sustituye_a',
        'numero',
        'fecha',
        'fecha2',
        'area',
        'falla',
        'propuesta',
        'seguimiento',
        'etapa_elemento',
        'observaciones',
        'elaboro',
        'autorizo',

    ];

    public function users(){
        return $this->hasOne('App\User');
    }

    

}
