<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
	protected $fillable = ['descricao', 'obs', 'paciente_id', 'refeicao_id'];

    public function paciente(){
        return $this->belongsTo('App\Paciente');
    }

    public function refeicao(){
        return $this->hasMany('App\Refeicao');
    }
}
