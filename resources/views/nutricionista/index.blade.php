@extends('adminlte::page')

@section('content')

	@if($message = Session::get('success'))
		<div class="alert alert-success">
			{{$message}}
		</div>
	@endif

<h1>Página Inicial</h1>
<a href="nutricionista/{{Auth::user()->id}}/edit">Alterar Dados</a>
<br>
<a href="{{URL::to('paciente')}}">Lista de Pacientes</a>
<br>
<a href="{{URL::to('paciente')}}/create">Cadastrar Paciente</a>

@endsection