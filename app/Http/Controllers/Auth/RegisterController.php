<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Logradouro;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/nutricionista';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'tel' => ['required','celular_com_ddd'],
            'crn' => ['required','numeric'],
            'rua' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'cep' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $logradouro = new Logradouro();
        $logradouro->rua = $data['rua'];
        $logradouro->bairro = $data['bairro'];
        $logradouro->cidade = $data['cidade'];
        $logradouro->cep = $data['cep'];
         if ($this->validarCep($logradouro->cep) == true) {
            
            $telefone = $data['tel'];
            if ($this->validarTelefone($telefone) == true) {

                $logradouro->save();
                
                return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'telefone' => $data['tel'],
                    'crn' => $data['crn'],
                    'logradouro_id' => $logradouro->id,
                    'qtdPaciente' => $data['qtdPaciente']
                ]);
                
            }else{
                    if ($this->validarTelefone($telefone) == false) {
                        echo $telefone;
                        exit();
                        return redirect('paciente/create')->with('danger', 'Telefone inválido');
                    }
                    
                }
            
        }
        
    }

    private function validarCep($cep) {
        // retira espacos em branco
        $cep = trim($cep);
        // expressao regular para avaliar o cep
        $avaliaCep = preg_match("/[0-9]{5}-[0-9]{3}/", $cep);
        
        // verifica o resultado
        if(!$avaliaCep) {            
            return false;
        }else{
            return true;
        }
    }

    private function validarTelefone($Telefone) {
        
        $Telefone = trim($Telefone);
        
        $avaliaTel = preg_match('/^\(\d{2}\)\d{4,5}-\d{4}$/', $Telefone);
        
        // verifica o resultado
        if(!$avaliaTel) {            
            return false;
        }else{
            return true;
        }
    }
}
