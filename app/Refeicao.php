<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
	protected $fillable = ['hora', 'descricao'];

	protected $casts = [
		'alimento_id' => 'array',
	];

    public function dieta(){
        return $this->belongsTo('App\Dieta');
    }

    public function alimento(){
        return $this->hasMany('App\Alimento');
    }
}
