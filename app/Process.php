<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    //

    protected $fillable = [
        'id_user',
        'nombre',
    ];

    public function documental_analises(){
        return $this->hasOne('App\DocumentalAnalises','process_id');
    }

    public function evaluation_criteria(){

        return $this->hasOne('App\EvaluationCriterion','process_id');

    }

    public function failure_detection(){
        return $this->hasOne('App\FailureDetection','process_id');
    }

    public function record_find(){
        return $this->hasOne('App\RecordFind','process_id');
    }

    public function work_program()
    {
        return $this->hasOne('App\WorkProgram','process_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function answer(){
        return $this->hasMany('App\Answer','id_periods');
    }
}
