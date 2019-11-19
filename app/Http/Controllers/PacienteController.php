<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\User;
use App\Logradouro;
use App\Antropometria;
use App\Anamnese;
use App\GastoEnergetico;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    public function index(){
    	$paciente = Paciente::where('user_id', 'LIKE', Auth::user()->id)
    	->orderBy('nome', 'asc')
    	->paginate(10);
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

		
		
        $user = User::find(Auth::user()->id);
        $qtdPaciente = Paciente::where('user_id', 'LIKE', $user->id)->count();

        if ($qtdPaciente < $user->qtdPaciente) {
            $logradouro = new Logradouro();
            $logradouro->rua = $request['rua'];
            $logradouro->bairro = $request['bairro'];
            $logradouro->cidade = $request['cidade'];
            $logradouro->cep = $request['cep'];
            if ($this->validarCep($logradouro->cep) == true) {
                $logradouro->save();
            }else{
                return redirect('paciente/create')->with('danger', 'Cep inválido');
            }

            $dtNascimento = date("Y/d/m", strtotime($request['dtNascimento']));
            $paciente = Paciente::create([
                'nome' => $request['nome'],
                'telefone' => $request['tel'],
                'dtNascimento' => $dtNascimento,
                'sexo' => $request['sexo'],
                'cpf' => $request['cpf'],
                'logradouro_id' => $logradouro->id,
                'email' => $request['email'],
                'user_id' => Auth::user()->id
            ]);


            $paciente->antropometria()->create(); //Cria Antropometria
            $paciente->anamnese()->create(); //Cria Anamnese
            $paciente->gastoEnergetico()->create();//Cria Gasto Energético
            $paciente->dieta()->create();//Cria Gasto Energético

            if ($paciente->save() && $logradouro->save()) {
                return redirect('paciente/')->with('success', 'Paciente cadastrado com sucesso!');
            }
        }else{
            return redirect('paciente/')->with('danger', 'Você chegou ao número máximo de pacientes para seu plano. Exclua algum registro ou contarte novo Plano');
        }
		
	}

	public function edit($id){
		$paciente = Paciente::find($id);
		$logradouro = Logradouro::find($paciente->logradouro_id);
		return view('paciente.edit', compact('paciente', 'id'), array('logradouro' => $logradouro));
	}

	public function update(Request $request, $id){

		$this->validate($request,[
            'nome' => 'required|max:255',
            'tel' => 'required|celular_com_ddd',
            'sexo' => 'required',
            'cpf' => 'required|formato_cpf',
            'rua' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'cep' => 'numeric|required',
            'email' => 'required|max:255', 
            'dtNascimento' => 'data|required'
        ]);
        $paciente = Paciente::find($id);

        $logradouro = Logradouro::find($paciente->logradouro_id);


        $dtNascimento = date("Y/d/m", strtotime($request['dtNascimento']));

        
        $paciente->nome = $request->get('nome');
        $paciente->telefone = $request->get('tel');
        $paciente->sexo = $request->get('sexo');
        $paciente->cpf = $request->get('cpf');
        $paciente->dtNascimento = $dtNascimento;
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
		$logradouro = Logradouro::find($paciente->logradouro_id);
		$antropometria = Antropometria::where('paciente_id', 'LIKE', $id);
        $anamnese = Anamnese::where('paciente_id', 'LIKE', $id);
        $gastoEnergetico = GastoEnergetico::where('paciente_id', 'LIKE', $id);
        $dieta = Dieta::where('paciente_id', 'LIKE', $id);

		$paciente->delete();
		$logradouro->delete();
		$antropometria->delete();
        $anamnese->delete();
        $gastoEnergetico->delete();
        $dieta->delete();
		
		return redirect('paciente/')->with('success','Paciente deletado com sucesso!');
	}

	public function busca(Request $request){
		$paciente = Paciente::where('nome', 'LIKE', '%'.$request->input('busca').'%')
		->where('user_id', 'LIKE', Auth::user()->id)
		->paginate(10);

		return view('paciente.index', array('paciente' => $paciente, 'buscar' => $request->input('busca')));
	}

    

    private function validarCep($cep) {
        // retira espacos em branco
        $cep = trim($cep);
        // expressao regular para avaliar o cep
        $avaliaCep = ereg("^[0-9]{5}-[0-9]{3}$", $cep);
        
        // verifica o resultado
        if(!$avaliaCep) {            
            return false;
        }else{
            return true;
        }
    }
}
