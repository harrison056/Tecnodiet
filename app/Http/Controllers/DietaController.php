<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Dieta;
use App\Refeicao;
use App\Alimento;
use Illuminate\Http\Request;

class DietaController extends Controller
{
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dieta = Dieta::where('paciente_id', 'LIKE', $id);
        return view('dieta.edit', compact('dieta', 'id'), array('dieta' => $dieta)); 
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

    public function buscaAlimento(Request $request)
    {
        $alimento = Alimento::where('description', 'LIKE', '%'.$request->input('busca').'%')
        ->paginate(7);

        return view('paciente.index', array('paciente' => $paciente, 'buscar' => $request->input('busca')));
    }
}
