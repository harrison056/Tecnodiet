@extends('adminlte::page')

@section('content')

	@if($message = Session::get('success'))
		<div class="alert alert-success">
			{{$message}}
		</div>
	@endif

	

<div class="col-md-2">
</div>	
<div class="row">
	<div class="col-md-8">
		<form method="POST" action="{{url('paciente/busca')}}">
			@csrf
				<div class="input-group">
					<input type="text" class="form-control" id="busca" name="busca" value="{{$buscar}}" placeholder="Buscar Pacientes">
					<span class="input-group-btn">
						<button class="btn btn-outline-secondary">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
		</form>
	</div>
</div>
<br>
  
<div class="row">	
	<div class="col-md-8">
		<a href="{{URL::to('paciente')}}/create"><button class="btn btn-success">Add Paciente</button></a>
	</div>
</div>
<br>	
@foreach($paciente as $pacientes)

<div class="box box-success">
	<div class="box-header with-border">
        <a href="{{URL::to('paciente')}}/{{$pacientes->id}}"><h3 class="box-title"><b>{{$pacientes->nome}}</b></h3></a>		
    </div>

    <div class="box-body">
    	<div class="col-md-8">
    		<ul>
				<li><strong>email</strong> {{$pacientes->email}}</li>
				<li><strong>telefone</strong> {{$pacientes->telefone}}</li>
				<li><strong>CPF</strong> {{$pacientes->cpf}}</li>
				<li><strong>Adicionado em: </strong> {{date("d/m/Y H:i", strtotime($pacientes->created_at))}}</li>
			</ul>
    	</div>

    	<div class="col-md-4">
    		<button class="btn btn-info">Dieta</button>
    		<a href="{{URL::to('antropometria')}}/{{$pacientes->id}}"><button class="btn btn-info">Antropometria</button></a>
    		<a href="{{URL::to('anamnese')}}/{{$pacientes->id}}"><button class="btn btn-info" >Anamnese</button></a>
    	</div>

	</div>
</div>

@endforeach
{{$paciente->links()}}


@endsection