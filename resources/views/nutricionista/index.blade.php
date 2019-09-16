@extends('layouts.app')

@section('content')

	@if($message = Session::get('success'))
		<div class="alert alert-success">
			{{$message}}
		</div>
	@endif

<h1>Página Inicial</h1>
<a href="nutricionista/{{Auth::user()->id}}/edit">Alterar Dados</a>

@endsection