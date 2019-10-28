<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            return view('antropometria.edit', compact('anamnese', 'id'), array('anamnese' => $anamnese));
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
        //
    }

}
