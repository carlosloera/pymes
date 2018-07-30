<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndicatorAnswer extends Model
{
    protected $table = 'indicators_answers';
    protected $fillable = ['id_indicator', 'id_process', 'indicator_answer'];
    protected $primaryKey = 'id_indicator_answer';
}
