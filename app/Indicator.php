<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    
	protected $fillable = ['id_category', 'description', 'type'];
    protected $primaryKey = 'id_Indicator';

}
