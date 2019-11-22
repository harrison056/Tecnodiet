<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
	protected $fillable = ['hora', 'descricao'];


    public function dieta(){
        return $this->belongsTo('App\Dieta');
    }

    public function alimento(){
        return $this->belongsToMany('App\Alimento');
    }
}
