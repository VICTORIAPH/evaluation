<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    
    protected $table="profesor"; 

    public function user(){
        return $this->belongsTo('App\User');
     }
}
