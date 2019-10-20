<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
	protected $fillable = ['hora', 'descricao', 'alimento_id'];

    public function paciente(){
        return $this->belongsTo('App\Dieta');
    }

    public function alimento(){
        return $this->hasMany('App\Alimento');
    }
}
