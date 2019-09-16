@extends('layouts.app')
@section('title','Tecnodiet - Cadastrar Paciente')
@section('content')

<h1>Cadastro de Paciente</h1>
<form method="POST" enctype="multipart/form-data" action="{{url('paciente')}}">
		@csrf
		<div class="form-group mb-3">
		    <label for="sku">Nome</label>
		    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="titulo">Telefone</label>
		    <input type="text" class="form-control" id="tel" name="tel" placeholder="(xx) xxxxx-xxxx" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">Sexo</label>
		   	<input type="text" class="form-control" id="sexo" name="sexo" placeholder="Sexo" required></input>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">CPF</label>
		   	<input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required></input>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">Endereço</label>
		   	<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereco" required></input>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">E-mail</label>
		   	<input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required></input>
	 	</div>
	 	<button type="submit" class="btn btn-primary">Cadastrar</button>
	</form>


@endsection