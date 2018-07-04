<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['id_category', 'question', 'type', 'status'];
    protected $primaryKey = 'id_question';


    public function answer(){

        return $this->hasOne('App\Answer','id_question');

    }

}
