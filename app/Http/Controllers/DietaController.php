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
    public function dieta($id)
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
        $dieta = Dieta::find($id);

        $dieta->descricao = $request->get('descricao');
        $dieta->obs = $request->get('obs');

        $dieta->refeicao()->create([
            'hora' => $request['hora'],
            'descricao' => $request['descricao']
        ]);
    }

    public function buscaAlimento(Request $request)
    {
        $alimento = Alimento::where('description', 'LIKE', '%'.$request->input('busca').'%');

        return response()->json(['alimento' => $alimento]);
    }
    
}
