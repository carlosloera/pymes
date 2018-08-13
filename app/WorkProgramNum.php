<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkProgramNum extends Model
{
    //
    protected $fillable = [
            'work_programs_id',
            'numero',
            'actividad',
            'responsable',
            'semana',
            'semana1',
            'semana2',
            'semana3',
            'semana4',
    ];
    public function workprogram()
    {
        return $this->belongsTo('App\WorkProgram');
    }
}
