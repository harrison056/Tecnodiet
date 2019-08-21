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
        if (Auth::check()) {
            return view('nutricionista.index'); 
        }else{
            return redirect('login');
        }
    }

    
    public function create()
    {
        $user = new User();
        if (Auth::check()) {
           // if () {
                return view('nutricionista.create');
            //}else{
            //    return view('nutricionista.edit');
           // }   
        }else{
            return redirect('login');
        }
    }

   
    public function store(Request $request)
    {
        $user = factory(\App\User::class)->create();

        $nutricionista = new Nutricionista();
        $nutricionista->nome = $request->input('nome');
        $nutricionista->telefone = $request->input('tel');
        $nutricionista->sexo = $request->input('sexo');
        $nutricionista->crn = $request->input('crn');
        $nutricionista->endereco = $request->input('endereco');
        $nutricionista->qtdPaciente = $request->input('qtdPaciente');
        
        $user->nutricionista()->save($nutricionista);

        if($nutricionista->save()){
            return redirect('nutricionista')->with('success', 'Cadastro realizado com sucesso!');
        }

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        if (Auth::check()) {
            $nutricionista = Nutricionista::find($id);
            return view('nutricionista.edit', compact('nutricionista', 'id'));
        }else{
            return redirect('login');
        }
    }    

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
