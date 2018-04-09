<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkProgram extends Model
{
    //


    protected $fillable = [
       
        'process_id',
        'area',
        'inicio',
        'terminacion',
        'suspencion',
        'cancelacion',
        'reinicio',
        'terminacion2',
        'responsable',
        'clave',
        'observaciones',
        'elaboro',
        'reviso',
        'autorizo',
    ];

    public function workprogramnum()
    {
        return $this->hasMany('App\WorkProgramNum','work_programs_id');
    }
}
