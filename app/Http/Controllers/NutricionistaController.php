<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nutricionista;
use App\User;
use Illuminate\Support\Facades\Auth;

class NutricionistaController extends Controller
{
    
    public function index()
    {
        return view('nutricionista.index'); 
    }

    
    public function create()
    {
        return view('nutricionista.create');   
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'nome' => 'required|min:10',
            'tel' => 'required|numeric',
            'sexo' => 'required',
            'crn' => 'required|numeric',
            'endereco' => 'required|min:10'
        ]);

        $nutricionista = new Nutricionista();
        $nutricionista->nome = $request->input('nome');
        $nutricionista->telefone = $request->input('tel');
        $nutricionista->sexo = $request->input('sexo');
        $nutricionista->crn = $request->input('crn');
        $nutricionista->endereco = $request->input('endereco');
        $nutricionista->qtdPaciente = $request->input('qtdPaciente');
        $nutricionista->user_id = Auth::user()->id;
//        $nutricionista->user()->associate(Auth::user());

        if($nutricionista->save()){
            return redirect('nutricionista')->with('success', 'Cadastro realizado com sucesso!');
        }

    }

    public function edit($id)
    {
        $nutricionista = Nutricionista::find($id);
        return view('nutricionista.edit', compact('nutricionista', 'id'));
    }    

    
    public function update(Request $request, $id)
    {
        $nutricionista = Nutricionista::find($id);

        $this->validate($request,[
            'nome' => 'required|min:10',
            'tel' => 'required|numeric',
            'sexo' => 'required',
            'crn' => 'required|numeric',
            'endereco' => 'required|min:10'
        ]);

        $nutricionista->nome = $request->get('nome');
        $nutricionista->telefone = $request->get('tel');
        $nutricionista->sexo = $request->get('sexo');
        $nutricionista->crn = $request->get('crn');
        $nutricionista->endereco = $request->get('endereco');
        $nutricionista->qtdPaciente = $request->get('qtdPaciente');

        if($nutricionista->save()){
            return redirect('nutricionista')->with('success', 'Cadastro realizado com sucesso!');
        }
    }

    
    public function destroy($id)
    {
        //
    }
}
