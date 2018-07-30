<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer_closed extends Model
{
    //
    protected $fillable = [
        'id',
        'answer',
        'comment',
        'id_process',
        'id_question',
    ];

    public function question(){
        return $this->belongsTo('App\Question','id_question');
    }
     public function process(){
        return $this->belongsTo('App\Process');
    }

}
