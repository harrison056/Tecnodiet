<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antropometria extends Model
{
    protected $fillable = ['altura', 'peso', 'dtNascimento','bracoDirRelaxado','bracoEsqRelaxado','bracoDirContraido', 'bracoEsqContraido', 'antebracoDir', 'antebracoEsq', 'punhoDir', 'punhoEsq', 'pescoco', 'ombro', 'peitoral', 'cintura', 'abdomen', 'quadril', 'panturrilhaDir', 'panturrilhaEsq', 'coxaDir', 'coxaEsq', 'paciente_id'];

    public function paciente(){
        return $this->belongsTo('App\Paciente');
    }
}
