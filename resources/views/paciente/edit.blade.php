@extends('layouts.app')
@section('title','Tecnodiet - Editar Cadastro Paciente')
@section('content')

<h1>Editar cadastro de Paciente</h1>

@if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

<form method="POST" enctype="multipart/form-data" action="{{action('PacienteController@update', $id)}}">
		@csrf
		<input type="hidden" name="_method" value="PATCH">
		<div class="form-group mb-3">
		    <label for="sku">Nome</label>
		    <input type="text" class="form-control" id="nome" name="nome" value="{{$paciente->nome}}" placeholder="Nome" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="titulo">Telefone</label>
		    <input type="text" class="form-control" id="tel" name="tel" value="{{$paciente->telefone}}" placeholder="(xx) xxxxx-xxxx" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">Sexo</label>
		   	<input type="text" class="form-control" id="sexo" name="sexo" value="{{$paciente->sexo}}" placeholder="Sexo" required></input>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">CPF</label>
		   	<input type="text" class="form-control" id="cpf" name="cpf" value="{{$paciente->cpf}}" placeholder="CPF" required></input>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">Endereço</label>
		   	<input type="text" class="form-control" id="endereco" name="endereco" value="{{$paciente->endereco}}" placeholder="Endereco" required></input>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">E-mail</label>
		   	<input type="text" class="form-control" id="email" name="email" value="{{$paciente->email}}" placeholder="E-mail" required></input>
	 	</div>
	 	<button type="submit" class="btn btn-primary">Alterar</button>
	</form>


@endsection