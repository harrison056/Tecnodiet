<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{

	public function refeicao(){
        return $this->belongsToMany('App\Refeicao');
    }
}
