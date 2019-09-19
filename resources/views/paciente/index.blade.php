@extends('layouts.app')

@section('content')

	@if($message = Session::get('success'))
		<div class="alert alert-success">
			{{$message}}
		</div>
	@endif

<h1>Página do Paciente</h1>
	
<div class="row">
	<div class="col-md-12">
		<form method="POST" action="{{url('paciente/busca')}}">
				@csrf
				<div class="input-group mb-3">
					<input type="text" class="form-control" id="busca" name="busca" value="{{$buscar}}">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary">Buscar</button>
					</div>
				</div>
		</form>
	</div>

<ul>
	@foreach($paciente as $pacientes)

	<li><a href="{{URL::to('paciente')}}/{{$pacientes->id}}">{{$pacientes->nome}}</a></li>

	@endforeach
</ul>

@endsection