@extends('layouts.app')

@section('content')

	@if($message = Session::get('success'))
		<div class="alert alert-success">
			{{$message}}
		</div>
	@endif

<h1>Página Inicial</h1>
<ul>
	<li><a href="{{ url('nutricionista/edit') }}">Editar Cadastro</a></li>
</ul>

@endsection