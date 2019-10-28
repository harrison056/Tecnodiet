<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
	protected $fillable = ['casoClinico', 'restricao', 'bebida','fumante','foraDeCasa','sono', 'hrSono', 'obsSono', 'exercicio', 'patologias', 'medicamentos', 'exames', 'historicoFamiliar', 'apetite', 'mastigacao', 'intestinal', 'suplementos', 'alergias', 'intolerancias', 'obsGeral', 'paciente_id'];
  

    public function paciente(){
        return $this->belongsTo('App\Paciente');
    }
}
