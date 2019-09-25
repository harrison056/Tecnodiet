<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logradouro extends Model
{
    protected $fillable = [
        'rua', 'bairro', 'cidade','cep'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    } 
}
