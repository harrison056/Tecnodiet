<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\User;
use App\Logradouro;
use App\Antropometria;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    public function index(){
    	$paciente = Paciente::where('user_id', 'LIKE', Auth::user()->id)->paginate();
    	return view('paciente.index', array('paciente'=> $paciente, 'buscar' => null));
    }

    public function show($id){
    	$paciente = Paciente::find($id);
        $logradouro = Logradouro::find($paciente->logradouro_id);
        $antropometria = Antropometria::find($paciente->antropometria_id);
    	return view('paciente.show', array('paciente' => $paciente, 'logradouro' => $logradouro, 'antropometria' => $antropometria));
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
            'email' => 'required|max:255|unique:pacientes'
        ]);
		
		$logradouro = new Logradouro();
        $logradouro->rua = $request['rua'];
        $logradouro->bairro = $request['bairro'];
        $logradouro->cidade = $request['cidade'];
        $logradouro->cep = $request['cep'];
        $logradouro->save();

		$paciente = Paciente::create([
			'nome' => $request['nome'],
            'telefone' => $request['tel'],
            'sexo' => $request['sexo'],
            'cpf' => $request['cpf'],
            'logradouro_id' => $logradouro->id,
            'email' => $request['email'],
            'user_id' => Auth::user()->id
		]);

		$paciente->antropometria()->create(); //Cria Antropometria
		//$paciente->dieta()->create(); //Cria Dieta
		
		if ($paciente->save()) {
			return redirect('paciente/')->with('success', 'Paciente cadastrado com sucesso!');
		}
		
	}

	public function edit($id){
		$paciente = Paciente::find($id);
		$logradouro = Logradouro::find($paciente->logradouro_id);
		return view('paciente.edit', compact('paciente', 'id'), array('logradouro' => $logradouro));
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

        $logradouro = Logradouro::find($paciente->logradouro_id);

        $paciente->nome = $request->get('nome');
        $paciente->telefone = $request->get('tel');
        $paciente->sexo = $request->get('sexo');
        $paciente->cpf = $request->get('cpf');
        $paciente->email = $request->get('email');
        $logradouro->rua = $request->get('rua');
        $logradouro->bairro = $request->get('bairro');
        $logradouro->cidade = $request->get('cidade');
        $logradouro->cep = $request->get('cep');

		if ($paciente->save() && $logradouro->save()) {
			return redirect('paciente/' .$id)->with('success', 'Alterações realizadas com sucesso!');
		}
		
	}

	public function destroy($id){
		$paciente = Paciente::find($id);
		$paciente->delete();
		Logradouro::find($paciente->logradouro_id)->delete();
		return redirect('paciente/')->with('success','Paciente deletado com sucesso!');
	}

	public function busca(Request $request){
		$paciente = Paciente::where('nome', 'LIKE', '%'.$request->input('busca').'%')
		->orwhere('email', 'LIKE', '%'.$request->input('busca').'%')->orwhere('cpf', 'LIKE', '%'.$request->input('busca').'%')
		->paginate();

		return view('paciente.index', array('paciente' => $paciente, 'buscar' => $request->input('busca')));
	}

}
