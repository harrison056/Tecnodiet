<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutricionista extends Model
{

	protected $fillable = ['nome','telefone','sexo','endereco','crn','qtdPaciente'];
	protected $guarded = ['id', 'created_at', 'update_at', 'user_id'];

    public function user(){
    	return $this->hasOne(User::class);
    } 
}
