@extends('layouts.app')

@section('content')

	@if($message = Session::get('success'))
		<div class="alert alert-success">
			{{$message}}
		</div>
	@endif

<h1>Página Inicial</h1>
<a href="nutricionista/{{Auth::user()->id}}/edit">Alterar Dados</a>
<br>
<a href="paciente/">Lista de Pacientes</a>
<br>
<a href="paciente/create">Cadastrar Paciente</a>

@endsection