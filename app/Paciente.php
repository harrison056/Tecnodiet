<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Paciente extends Model
{
	protected $fillable = ['nome', 'email', 'telefone','sexo', 'dtNascimento','endereco','cpf', 'user_id', 'logradouro_id'];

	//protected $dates = ['dtNascimento'=> 'm-d-Y'];

   
    public function antropometria(){
        return $this->hasOne('App\Antropometria');
    }

    public function dieta(){
        return $this->hasOne('App\Dieta');
    }
}
