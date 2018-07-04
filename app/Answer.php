<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //

    protected $primaryKey = 'id_answers';
    protected $fillable = [
        'id_answers',
        'answer',
        'comment',
        'id_question',
        'id_matricula',
        'id_periods',
    ];

    public function process(){
        return $this->belongsTo('App\Process');
    }

    public function question(){
        return $this->belongsTo('App\Question','id_question');
    }

}
