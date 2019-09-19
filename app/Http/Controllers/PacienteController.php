<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\User;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    public function index(){
    	$paciente = Paciente::where('user_id', 'LIKE', Auth::user()->id)->paginate();
    	return view('paciente.index', array('paciente'=> $paciente, 'buscar' => null));
    }

    public function show($id){
    	$paciente = Paciente::find($id);
    	return view('paciente.show', array('paciente' => $paciente));
	}

	public function create(){
		return view('paciente.create');
	}

	public function store(Request $request){

		
		$this->validate($request,[
            'nome' => 'required|max:255',
            'tel' => 'required|numeric',
            'sexo' => 'required',
            'cpf' => 'required|numeric',
            'endereco' => 'required',
            'email' => 'required|max:255|unique:pacientes'
        ]);
		
		$paciente = Paciente::create([
			'nome' => $request['nome'],
            'telefone' => $request['tel'],
            'sexo' => $request['sexo'],
            'cpf' => $request['cpf'],
            'endereco' => $request['endereco'],
            'email' => $request['email'],
            'user_id' => Auth::user()->id
		]);
		//$paciente->user()->associate(Auth::user());
		
		if ($paciente->save()) {
			return redirect('paciente/')->with('success', 'Paciente cadastrado com sucesso!');
		}
		
	}

	public function edit($id){
		$paciente = Paciente::find($id);
		return view('paciente.edit', compact('paciente', 'id'));
	}

	public function update(Request $request, $id){

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
        $paciente = Paciente::find($id);

        $paciente->nome = $request->get('nome');
        $paciente->telefone = $request->get('tel');
        $paciente->sexo = $request->get('sexo');
        $paciente->cpf = $request->get('cpf');
        $paciente->endereco = $request->get('endereco');
        $paciente->email = $request->get('email');

		if ($paciente->save()) {
			return redirect('paciente/' .$id)->with('success', 'Alterações realizadas com sucesso!');
		}
		
	}

	public function destroy($id){
		Paciente::find($id)->delete();
		return redirect('paciente/')->with('success','Paciente deletado com sucesso!');
	}

	public function busca(Request $request){
		$paciente = Paciente::where('nome', 'LIKE', '%'.$request->input('busca').'%')
		->orwhere('email', 'LIKE', '%'.$request->input('busca').'%')
		->paginate();

		return view('paciente.index', array('paciente' => $paciente, 'buscar' => $request->input('busca')));
	}

}
