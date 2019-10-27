<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Antropometria;

class AntropometriaController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $antropometria = Antropometria::find($id);
        if($antropometria->peso == null){
            return view('antropometria.edit', compact('antropometria', 'id'), array('antropometria' => $antropometria));
        }else{
            return view('antropometria.show', array('antropometria' => $antropometria));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $antropometria = Antropometria::where('paciente_id', 'LIKE', $id);
        return view('antropometria.edit', compact('antropometria', 'id'), array('antropometria' => $antropometria));
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

        $antropometria = Antropometria::find($id);

        $antropometria->altura = $request->get('altura');
        $antropometria->peso = $request->get('peso');
        $antropometria->bracoDirRelaxado = $request->get('bracoDirRelaxado');
        $antropometria->bracoEsqRelaxado = $request->get('bracoEsqRelaxado');
        $antropometria->bracoDirContraido = $request->get('bracoDirContraido');
        $antropometria->bracoEsqContraido = $request->get('bracoEsqContraido');
        $antropometria->antebracoDir = $request->get('antebracoDir');
        $antropometria->antebracoEsq = $request->get('antebracoEsq');
        $antropometria->punhoDir = $request->get('punhoDir');
        $antropometria->punhoEsq = $request->get('punhoEsq');
        $antropometria->pescoco = $request->get('pescoco');
        $antropometria->ombro = $request->get('ombro');
        $antropometria->peitoral = $request->get('peitoral');
        $antropometria->cintura = $request->get('cintura');
        $antropometria->abdomen = $request->get('abdomen');
        $antropometria->quadril = $request->get('quadril');
        $antropometria->panturrilhaDir = $request->get('panturrilhaDir');
        $antropometria->panturrilhaEsq = $request->get('panturrilhaEsq');
        $antropometria->coxaDir = $request->get('coxaDir');
        $antropometria->coxaEsq = $request->get('coxaEsq');
        $antropometria->punho = $request->get('punho');
        $antropometria->femur = $request->get('femur');

        //Calculo de imc
        $imc = $antropometria->peso / ($antropometria->altura * $antropometria->altura);
        //Setando valor imc
        $antropometria->imc = $imc;
        //Calculo de peso ideal
        if ($paciente->sexo == 1) {
            $pesoIdeal = $antropometria->altura - 100 - (($antropometria->altura - 150) / 4);
        }else{
            $pesoIdeal = $antropometria->altura - 100 - (($antropometria->altura - 150) / 2);
        }
        //Setando valor Peso ideal
        $antropometria->pesoIdeal = $pesoIdeal;


        if ($antropometria->save()) {
            return redirect('paciente/' .$id)->with('success', 'Alterações realizadas com sucesso!');
        }
    }

}
