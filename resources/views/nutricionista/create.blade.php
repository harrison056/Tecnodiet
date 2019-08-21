@extends('layouts.app')
@section('title','Tecnodiet - Cadastro Nutricionista')
@section('content')

<h1>Cadastro Nutricionista</h1>
<form method="POST" action="{{url('nutricionista')}}">
		@csrf
		<div class="form-group mb-3">
		    <label for="sku">Nome</label>
		    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="titulo">Telefone</label>
		    <input type="text" class="form-control" id="tel" name="tel" placeholder="(xx) xxxxx-xxxx" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">Sexo</label>
		   	<input type="text" class="form-control" id="sexo" name="sexo" placeholder="Digite seu sexo" required></input>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">CRN</label>
		   	<input type="text" class="form-control" id="crn" name="crn" placeholder="Digite CRN" required></input>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">Endereço</label>
		   	<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite endereco" required></input>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">Plano</label>
		   	<input type="text" class="form-control" id="qtdPaciente" name="qtdPaciente" placeholder="Numero de pacientes" required></input>
	 	</div>
	 	<button type="submit" class="btn btn-primary">Cadastrar</button>
	</form>


@endsection