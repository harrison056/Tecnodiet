<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GastoEnergetico extends Model
{

	protected $fillable = ['tmb', 'get', 'paciente_id'];

    public function paciente(){
        return $this->belongsTo('App\Paciente');
    }
}
