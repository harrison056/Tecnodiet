<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\GastoEnergetico;

class GastoController extends Controller
{
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gasto = Antropometria::where('paciente_id', 'LIKE', $id);
        return view('gasto.edit', compact('gasto', 'id'), array('gasto' => $gasto));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente = Paciente::find($id);
        $gasto = Antropometria::find($id);

        $sexo = $paciente->sexo;
        $peso = $paciente->peso;
        $altura = $paciente->altura;
        $idade = 

        $protocolo = $request->get('protocolo');//Protocolo para cálculo

        if ($protocolo == '1') {
            if ($sexo == 1) {
                $tmb = 66 + (13.7 * $peso) + (5 * $altura) - (6.8 * $idade);
            }else{
                $tmb = 665 + (9,6 * $peso) + (1,8 * $altura) – (4,7 * $idade);
            }
        }elseif ($protocolo == '2') {
            if ($sexo == 1) {
                $tmb = (10 * $peso) + (6.25 * $altura) - (5 * $idade) + 5;
            }else{
                $tmb = (10 * $peso) + (6.25 * $altura) - (5 * $idade) - 161;
            }
        }else{
            if ($sexo == 1) {
                $tmb = 879 + 10.2 * $peso;
            }else{
                $tmb = 795 + 7.18 * $peso;
            }
        }


        $atividadeFisica = $request->get('atividadeFisica');//Nível de atividade Física
        
        if ($atividadeFisica == '1') {
            $get = $tmb * 1.2;
        }elseif ($atividadeFisica == '2') {
            $get = $tmb * 1.5;
        }elseif ($atividadeFisica == '2') {
            $get = $tmb * 1.8;
        }else{
            $get = $tmb * 2.1;
        }

        $gasto->tmb = $tmb;
        $gasto->get = $get;

        if ($gasto->save()) {
            return redirect('gasto/' .$id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
