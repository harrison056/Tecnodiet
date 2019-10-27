@extends('adminlte::page')
@section('title','Tecnodiet - Alterar Cadastro')
@section('content')

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title"><b>Alterar Cadastro</b></h3>			
    </div>
    <div class="box-body">

    	@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif

        <form method="POST" enctype="multipart/form-data" action="{{action('NutricionistaController@update', $id)}}">
		@csrf
		<input type="hidden" name="_method" value="PATCH">
		<div class="box-body">
			<div class="col-md-12">
		    	<label for="sku"><h4><b>Nome</b></h4></label>
		    	<input type="text" class="form-control" id="name" name="name" value="{{$nutricionista->name}}" required>
		    </div>
	 	</div>
	 	<div class="box-body">
	 		<div class="col-md-4">
		    	<label for="titulo"><h4><b>Telefone</b></h4></label>
		    	<input type="text" class="form-control" id="tel" name="tel" value="{{$nutricionista->telefone}}" required>
		    </div>
		    <div class="col-md-4">
		    	<label for="descricao"><h4><b>CRN</b></h4></label>
		   		<input type="text" class="form-control" id="crn" name="crn" value="{{$nutricionista->crn}}" required></input>
		   	</div>
		   	<div class="col-md-4">
		   		<label for="descricao"><h4><b>E-mail</b></h4></label>
		   		<input type="text" class="form-control" id="email" name="email" value="{{$nutricionista->email}}" required></input>
		   	</div>
	 	</div>

	 	<div class="box-body">
        	<div class="col-md-12">
        		<label for="descricao"><h4><b>Rua</b></h4></label>
            	<input type="text" class="form-control" id="rua" name="rua" value="{{$logradouro->rua}}" required></input>
        	</div>
        </div>

	 	<div class="box-body">
	 		<div class="col-md-4">
	 			<label for="descricao"><h4><b>Cep</b></h4></label>
            	<input type="text" class="form-control" id="cep" name="cep" value="{{$logradouro->cep}}" required></input>
        	</div>
        	
        	<div class="col-md-4">
        		<label for="descricao"><h4><b>Bairro</b></h4></label>
            	<input type="text" class="form-control" id="bairro" name="bairro" value="{{$logradouro->bairro}}" required></input>
        	</div>
            <div class="col-md-4">
            	<label for="descricao"><h4><b>Cidade</b></h4></label>
            	<input type="text" class="form-control" id="cidade" name="cidade"value="{{$logradouro->cidade}}" required></input>
            </div>
	 	</div>
        <br>
        <div>
        	<div class="col-md-6">
        	<button type="submit" class="btn btn-success">Alterar</button>
	 		</div>
        </div>
	</form>
    </div>
    <!-- /.box-body -->
</div>

@endsection