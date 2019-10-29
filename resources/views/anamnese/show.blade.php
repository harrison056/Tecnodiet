@extends('adminlte::page')
@section('title','Tecnodiet - Anamnese')
@section('content')


@if($message = Session::get('success'))
	<div class="alert alert-success">
		{{$message}}
	</div>
@endif

<div class="box box-success">
	<div class="box-header with-border">
        <h2 class="box-title"><b>Anamnese - <a href="{{URL::to('paciente')}}/{{$paciente->id}}">{{$paciente->nome}}</a></b></h2>	
    </div>

   
</div>


@endsection