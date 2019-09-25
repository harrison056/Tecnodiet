<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Paciente extends Model
{
	protected $fillable = ['nome', 'email', 'telefone','sexo','endereco','cpf', 'user_id', 'logradouro_id'];

    public function user(){
    	return $this->hanOne('App\User', 'id', 'user_id');
    } 
}
