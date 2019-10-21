@extends('adminlte::page')

@section('content')
<h1>{{$paciente->nome}}</h1>

@if($message = Session::get('success'))
	<div class="alert alert-success">
		{{$message}}
	</div>
@endif

<div class="col-md-6">
			<ul>
				
				<li><strong>Nome</strong> {{$paciente->nome}}</li>
				<li><strong>email</strong> {{$paciente->email}}</li>
				<li><strong>telefone</strong> {{$paciente->telefone}}</li>
				<li><strong>sexo</strong> {{$paciente->sexo}}</li>
				<li><strong>CPF</strong> {{$paciente->cpf}}</li>
				<li><strong>Rua</strong> {{$logradouro->rua}}</li>
				<li><strong>Bairro</strong> {{$logradouro->bairro}}</li>
				<li><strong>Cep</strong> {{$logradouro->cep}}</li>
				<li><strong>Cidade</strong> {{$logradouro->cidade}}</li>
				<li><strong>Adicionado em: </strong> {{date("d/m/Y H:i", strtotime($paciente->created_at))}}</li>
			</ul>
</div>
		<form method="POST" action="{{action('PacienteController@destroy', $paciente->id)}}">
		@csrf
		<input type="hidden" name="_method" value="DELETE">
		<button class="btn btn-primary">Excluir</button>
	</form>
	</div>

	<br>
	<a href="{{URL::to('paciente/' .$paciente->id. '/edit')}}">Editar Cadastro</a>
	<br>
	<a href="{{URL::to('antropometria/' .$paciente->id. '/edit')}}">Cadastrar Antropometria</a>
	<br>
	<a href="{{URL::to('antropometria/' .$paciente->id)}}">Antropometria</a>
	<br>
	<a href="javascript:history.go(-1)">Voltar</a>




@endsection