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
    protected $redirectTo = '/home';

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
            'tel' => ['required','numeric'],
            'sexo' => ['required'],
            'crn' => ['required','numeric']
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
        $logradouro->save();
        
        $logradouro_id = $logradouro->id;
        /*
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->telefone = $data['tel'];
        $user->sexo = $data['sexo'];
        $user->crn = $data['crn'];
        $user->logradouro_id = $logradouro->id;
        $user->qtdPaciente = $data['qtdPaciente'];
        
        if($user->save()){
            return redirect('nutricionista');
        }
        */
        
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'telefone' => $data['tel'],
            'sexo' => $data['sexo'],
            'crn' => $data['crn'],
            'logradouro_id' => $logradouro_id,
            'qtdPaciente' => $data['qtdPaciente']
        ]);
        

    }
}
