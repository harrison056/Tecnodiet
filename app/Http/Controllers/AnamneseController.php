<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Anamnese;
use PDF;

class AnamneseController extends Controller
{
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);
        $anamnese = Anamnese::find($id);
        if($anamnese->casoClinico == null){
            return view('anamnese.edit', compact('anamnese', 'id'), array('anamnese' => $anamnese));
        }else{
            return view('anamnese.show', array('paciente'=> $paciente, 'anamnese' => $anamnese));
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
        $anamnese = Anamnese::where('paciente_id', 'LIKE', $id);
        return view('anamnese.edit', compact('anamnese', 'id'), array('anamnese' => $anamnese));
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

        $anamnese = Anamnese::find($id);

        $this->validate($request,[
            'casoClinico' => 'required|max:255',
            'obsGeral' => 'max:255',
        ]);

        $anamnese->casoClinico = $request->get('casoClinico');
        $anamnese->restricao = $request->get('restricao');
        $anamnese->bebida = $request->get('bebida');
        $anamnese->fumante = $request->get('fumante');
        $anamnese->foraDeCasa = $request->get('foraDeCasa');
        $anamnese->sono = $request->get('sono');
        $anamnese->hrSono = $request->get('hrSono');
        $anamnese->obsSono = $request->get('obsSono');
        $anamnese->exercicio = $request->get('exercicio');
        $anamnese->patologias = $request->get('patologias');
        $anamnese->medicamentos = $request->get('medicamentos');
        $anamnese->exames = $request->get('exames');
        $anamnese->historicoFamiliar = $request->get('historicoFamiliar');
        $anamnese->apetite = $request->get('apetite');
        $anamnese->mastigacao = $request->get('mastigacao');
        $anamnese->intestinal = $request->get('intestinal');
        $anamnese->suplementos = $request->get('suplementos');
        $anamnese->alergias = $request->get('alergias');
        $anamnese->intolerancias = $request->get('intolerancias');
        $anamnese->obsGeral = $request->get('obsGeral');

        if ($anamnese->save()) {
            return redirect('anamnese/' .$id)->with('success', 'Anamnese cadastrada com sucesso!');
        }
    }

    public function gerarPdf($id)
    {
        $paciente = Paciente::find($id);
        $anamnese = Anamnese::find($id);
        $pdf = PDF::loadView('anamnese.pdf', array('paciente'=> $paciente, 'anamnese' => $anamnese));
        return $pdf->setPaper('a4')->stream();
    }

}
