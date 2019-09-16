<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class NutricionistaController extends Controller
{
    
    public function index()
    {
        return view('nutricionista.index'); 
    }

    public function edit($id)
    {
        $nutricionista = User::find($id);
        return view('nutricionista.edit', compact('nutricionista', 'id'));
    }    

    
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request,[
            'name' => 'required|min:10',
            'tel' => 'required|numeric',
            'sexo' => 'required',
            'crn' => 'required|numeric',
            'endereco' => 'required|min:10'
        ]);

        $user->name = $request->get('name');
        $user->telefone = $request->get('tel');
        $user->sexo = $request->get('sexo');
        $user->crn = $request->get('crn');
        $user->endereco = $request->get('endereco');
        $user->qtdPaciente = $request->get('qtdPaciente');

        if($user->save()){
            return redirect('nutricionista')->with('success', 'Cadastro alterado com sucesso!');
        }
    }

    
    public function destroy($id)
    {
        //
    }
}
