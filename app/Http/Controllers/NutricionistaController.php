<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Paciente;
use App\Logradouro;
use Illuminate\Support\Facades\Auth;

class NutricionistaController extends Controller
{
    
    public function index()
    {
        $paciente = Paciente::where('user_id', 'LIKE', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(7);
        return view('nutricionista.index', array('paciente'=> $paciente, 'buscar' => null)); 
    }

    public function show(){
        $nutricionista = User::find(Auth::user()->id);
        $logradouro = Logradouro::find($nutricionista->logradouro_id);
        return view('nutricionista.show', array('nutricionista' => $nutricionista, 'logradouro' => $logradouro));
    }

    public function edit($id)
    {
        $nutricionista = User::find($id);
        $logradouro = Logradouro::find($nutricionista->logradouro_id);
        if ($nutricionista->id == Auth::user()->id) {
            return view('nutricionista.edit', compact('nutricionista', 'id'), array('nutricionista' => $nutricionista, 'logradouro' => $logradouro));
        }else{
            return view('nutricionista.index'); 
        }
    }    

    
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $logradouro = Logradouro::find($user->logradouro_id);

        $this->validate($request,[
            'name' => 'required|max:255',
            'tel' => 'required|numeric',
            'crn' => 'required|numeric',
            'rua' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'cep' => 'required|numeric',
        ]);

        $user->name = $request->get('name');
        $user->telefone = $request->get('tel');
        $user->crn = $request->get('crn');
        $user->email = $request->get('email');
        $logradouro->rua = $request->get('rua');
        $logradouro->bairro = $request->get('bairro');
        $logradouro->cidade = $request->get('cidade');
        $logradouro->cep = $request->get('cep');

        if($user->save()){
            return redirect('nutricionista')->with('success', 'Cadastro alterado com sucesso!');
        }
    }

    
    public function destroy($id)
    {
        //
    }
}
