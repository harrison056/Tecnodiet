@extends('layouts.app')
@section('title','Tecnodiet - Criar Antropometria')
@section('content')

<h1>Criar Antropometria</h1>

@if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

<form method="POST" enctype="multipart/form-data" action="{{url('antropometria')}}">
		@csrf
		<div class="form-group mb-3">
		    <label for="sku">altura</label>
		    <input type="text" class="form-control" id="altura" name="altura"  placeholder="altura" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="titulo">peso</label>
		    <input type="text" class="form-control" id="peso" name="peso"  placeholder="(xx) peso" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">dtNascimento</label>
		   	<input type="text" class="form-control" id="dtNascimento" name="dtNascimento"  placeholder="dtNascimento" required></input>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="descricao">bracoDirRelaxado</label>
		   	<input type="text" class="form-control" id="bracoDirRelaxado" name="bracoDirRelaxado"  placeholder="bracoDirRelaxado" required></input>
	 	</div>
	 	<div class="form-group mb-3">
            <label for="descricao">bracoEsqRelaxado</label>
            <input type="text" class="form-control" id="bracoEsqRelaxado" name="bracoEsqRelaxado"  placeholder="bracoEsqRelaxado" required></input>
        </div>
        <div class="form-group mb-3">
            <label for="descricao">bracoDirContraido</label>
            <input type="text" class="form-control" id="bracoDirContraido" name="bracoDirContraido"  placeholder="bracoDirContraidobracoEsqContraidoantebracoDir" required></input>
        </div>
        <div class="form-group mb-3">
            <label for="descricao">bracoEsqContraidoantebracoDir</label>
            <input type="text" class="form-control" id="bracoEsqContraidoantebracoDir" name="bracoEsqContraidoantebracoDir"  placeholder="bracoEsqContraidoantebracoDir" required></input>
        </div>
        <div class="form-group mb-3">
            <label for="descricao">antebracoDir</label>
            <input type="text" class="form-control" id="antebracoDir" name="antebracoDir"  placeholder="antebracoEsqantebracoDir" required></input>
        </div>
	 	<div class="form-group mb-3">
		    <label for="descricao">antebracoEsq</label>
		   	<input type="text" class="form-control" id="antebracoEsq" name="antebracoEsq"  placeholder="E-antebracoEsq" required></input>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="sku">punhoDir</label>
		    <input type="text" class="form-control" id="punhoDir" name="punhoDir"  placeholder="punhoDir" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="sku">punhoEsq</label>
		    <input type="text" class="form-control" id="punhoEsq" name="punhoEsq" placeholder="punhoEsq" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="sku">pescoco</label>
		    <input type="text" class="form-control" id="pescoco" name="pescoco" placeholder="pescoco" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="sku">ombro</label>
		    <input type="text" class="form-control" id="ombro" name="ombro" placeholder="ombro" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="sku">peitoral</label>
		    <input type="text" class="form-control" id="peitoral" name="peitoral" placeholder="peitoral" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="sku">cintura</label>
		    <input type="text" class="form-control" id="cintura" name="cintura"  placeholder="cintura" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="sku">abdomen</label>
		    <input type="text" class="form-control" id="abdomen" name="abdomen"  placeholder="abdomen" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="sku">quadril</label>
		    <input type="text" class="form-control" id="quadril" name="quadril"  placeholder="quadril" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="sku">panturrilhaDir</label>
		    <input type="text" class="form-control" id="panturrilhaDir" name="panturrilhaDir"  placeholder="panturrilhaDir" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="sku">panturrilhaEsq</label>
		    <input type="text" class="form-control" id="panturrilhaEsq" name="panturrilhaEsq"  placeholder="panturrilhaEsq" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="sku">coxaDir</label>
		    <input type="text" class="form-control" id="coxaDir" name="coxaDir"  placeholder="coxaDir" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="sku">coxaEsq</label>
		    <input type="text" class="form-control" id="coxaEsq" name="coxaEsq"  placeholder="coxaEsq" required>
	 	</div>
	 	<button type="submit" class="btn btn-primary">Cadastrar</button>
	</form>


@endsection