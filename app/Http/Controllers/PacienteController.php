<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\User;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    public function index(){
    	$paciente = Paciente::paginate();
    	return view('paciente.index');
    }

    public function show($id){
    	$paciente = Paciente::find($id);
    	return view('paciente.show', array('paciente' => $paciente));
	}

	public function create(){
		return view('paciente.create');
	}

	public function store(Request $request){

		/*
		$this->validate($request,[
            'nome' => 'required|max:255',
            'tel' => 'required|numeric',
            'sexo' => 'required',
            'cpf' => 'required|numeric',
            'endereco' => 'required',
            'email' => 'required|max:255|unique:pacientes'
        ]);
		*/
		
		$paciente = Paciente::create([
			'nome' => $request['nome'],
            'telefone' => $request['tel'],
            'sexo' => $request['sexo'],
            'cpf' => $request['cpf'],
            'endereco' => $request['endereco'],
            'email' => $request['email']
		]);
		$paciente->user()->associate(Auth::user());
		//$paciente->save();
		
		if ($paciente->save()) {
			return redirect('paciente/')->with('success', 'Paciente cadastrado com sucesso!');
		}
		
	}
}
