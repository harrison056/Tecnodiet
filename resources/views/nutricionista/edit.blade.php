@extends('adminlte::page')
@section('title','Tecnodiet - Editar Cadastro')
@section('content')

<h1>Editar Cadastro Nutricionista</h1>
<form method="POST" enctype="multipart/form-data" action="{{action('NutricionistaController@update', $id)}}">
		@csrf
		<input type="hidden" name="_method" value="PATCH">
		<div class="form-group mb-3">
		    <label for="sku">Nome</label>
		    <input type="text" class="form-control" id="name" name="name" value="{{$nutricionista->name}}" placeholder="Digite seu nome" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="titulo">Telefone</label>
		    <input type="text" class="form-control" id="tel" name="tel" value="{{$nutricionista->telefone}}"placeholder="(xx) xxxxx-xxxx" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">Sexo</label>
		   	<input type="text" class="form-control" id="sexo" name="sexo" value="{{$nutricionista->sexo}}" placeholder="Digite seu sexo" required></input>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">CRN</label>
		   	<input type="text" class="form-control" id="crn" name="crn"value="{{$nutricionista->crn}}" placeholder="Digite CRN" required></input>
	 	</div>
	 	<div class="form-group mb-3">
            <label for="descricao">Cep</label>
            <input type="text" class="form-control" id="cep" name="cep" value="{{$logradouro->cep}}" placeholder="Digite endereco" required></input>
        </div>
        <div class="form-group mb-3">
            <label for="descricao">Rua</label>
            <input type="text" class="form-control" id="rua" name="rua" value="{{$logradouro->rua}}" placeholder="Digite endereco" required></input>
        </div>
        <div class="form-group mb-3">
            <label for="descricao">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="{{$logradouro->bairro}}" placeholder="Digite endereco" required></input>
        </div>
        <div class="form-group mb-3">
            <label for="descricao">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="{{$logradouro->cidade}}" placeholder="Digite endereco" required></input>
        </div>
	 	<div class="form-group mb-3">
		    <label for="descricao">Plano</label>
		   	<input type="text" class="form-control" id="qtdPaciente" value="{{$nutricionista->qtdPaciente}}" name="qtdPaciente" placeholder="Numero de pacientes" required></input>
	 	</div>
	 	<button type="submit" class="btn btn-primary">Alterar</button>
	</form>


@endsection