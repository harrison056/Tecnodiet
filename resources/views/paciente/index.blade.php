@extends('adminlte::page')

@section('content')


@if($message = Session::get('success'))
	<div class="alert alert-success">
		{{$message}}
	</div>
@endif

@if($message = Session::get('danger'))
	<div class="alert alert-danger">
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

<a href="{{URL::to('paciente')}}/{{$pacientes->id}}">
<div class="box box-success">
	<div class="box-header with-border">
        <h3 class="box-title"><b>{{$pacientes->nome}}</b></h3>		
    </div>

    <div class="box-body">
    	<div class="col-md-8">
    		<ul>
				<li><strong>Email</strong> {{$pacientes->email}}</li>
				<li><strong>Telefone</strong> {{$pacientes->telefone}}</li>
				<li><strong>CPF</strong> {{$pacientes->cpf}}</li>
				<li><strong>Adicionado em: </strong> {{date("d/m/Y H:i", strtotime($pacientes->created_at))}}</li>
			</ul>
    	</div>

	</div>
</div>
</a>

@endforeach
{{$paciente->links()}}


@endsection