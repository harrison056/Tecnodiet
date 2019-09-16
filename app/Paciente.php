<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Paciente extends Model
{
	protected $fillable = ['nome', 'email', 'telefone','sexo','endereco','cpf'];

    public function user(){
    	return $this->hanOne('App\User');
    } 
}
