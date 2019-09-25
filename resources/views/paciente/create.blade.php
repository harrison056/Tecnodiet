@extends('layouts.app')
@section('title','Tecnodiet - Cadastrar Paciente')
@section('content')



<h1>Cadastro de Paciente</h1>
@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
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
            <label for="descricao">Cep</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite endereco" required></input>
        </div>
        <div class="form-group mb-3">
            <label for="descricao">Rua</label>
            <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite endereco" required></input>
        </div>
        <div class="form-group mb-3">
            <label for="descricao">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite endereco" required></input>
        </div>
        <div class="form-group mb-3">
            <label for="descricao">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite endereco" required></input>
        </div>
	 	<div class="form-group mb-3">
		    <label for="descricao">E-mail</label>
		   	<input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required></input>
	 	</div>
	 	<button type="submit" class="btn btn-primary">Cadastrar</button>
	</form>


@endsection