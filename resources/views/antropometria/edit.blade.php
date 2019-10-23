@extends('adminlte::page')
@section('title','Tecnodiet - Antropometria')
@section('content')


<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title"><b>Antropometria</b></h3>			
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
		
        <form method="POST" enctype="multipart/form-data" action="{{action('AntropometriaController@update', $id)}}">
		@csrf
		<input type="hidden" name="_method" value="PATCH">
		<div class="box-body">
			<div class="col-md-3">
		    	<label for="sku"><h4><b>Altura</b></h4></label>
		    	<input type="number" class="form-control" id="altura" name="altura" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4><b>Peso</b></h4></label>
		    	<input type="number" class="form-control" id="peso" name="peso" placeholder="0,00">
		    </div>
		    
	 	</div>

	 	<div class="box-body">
		   	<div class="col-md-3">
		   		<label for="descricao"><h4><b>Braço Direito Relaxado</b></h4></label>
		   		<input type="number" class="form-control" id="bracoDirRelaxado" name="bracoDirRelaxado" placeholder="0,00"></input>
		   	</div>
		   	<div class="col-md-3">
	 			<label for="descricao"><h4><b>Braço Esquerdo Relaxado</b></h4></label>
            	<input type="number" class="form-control" id="bracoEsqRelaxado" name="bracoEsqRelaxado"placeholder="0,00"></input>
        	</div>
        	<div class="col-md-3">
        		<label for="descricao"><h4><b>Braço Direito Contraído</b></h4></label>
            	<input type="number" class="form-control" id="bracoDirContraido" name="bracoDirContraido" placeholder="0,00"></input>
        	</div>
        	<div class="col-md-3">
        		<label for="descricao"><h4><b>Braço Esquerdo Contraído</b></h4></label>
            	<input type="number" class="form-control" id="bracoEsqContraido" name="bracoEsqContraido" placeholder="0,00"></input>
        	</div>
	 	</div>

	 	<div class="box-body">
			<div class="col-md-3">
		    	<label for="sku"><h4><b>Antebraço Direito</b></h4></label>
		    	<input type="number" class="form-control" id="antebracoDir" name="antebracoDir" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4><b>Antebraço Esquerdo</b></h4></label>
		    	<input type="number" class="form-control" id="antebracoEsq" name="antebracoEsq" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="sku"><h4><b>Punho Direito</b></h4></label>
		    	<input type="number" class="form-control" id="punhoDir" name="punhoDir" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4><b>Punho Esquerdo</b></h4></label>
		    	<input type="number" class="form-control" id="punhoEsq" name="punhoEsq" placeholder="0,00">
		    </div>
	 	</div>

	 	<div class="box-body">
			<div class="col-md-3">
		    	<label for="sku"><h4><b>Pescoço</b></h4></label>
		    	<input type="number" class="form-control" id="pescoco" name="pescoco" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4><b>Ombro</b></h4></label>
		    	<input type="number" class="form-control" id="ombro" name="ombro" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="sku"><h4><b>Peitoral</b></h4></label>
		    	<input type="number" class="form-control" id="peitoral" name="peitoral" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4><b>Cintura</b></h4></label>
		    	<input type="number" class="form-control" id="cintura" name="cintura"placeholder="0,00" >
		    </div>
	 	</div>

	 	<div class="box-body">
			<div class="col-md-3">
		    	<label for="sku"><h4><b>Abdomen</b></h4></label>
		    	<input type="number" class="form-control" id="abdomen" name="abdomen" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4><b>Quadril</b></h4></label>
		    	<input type="number" class="form-control" id="quadril" name="quadril" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="sku"><h4><b>Panturrilha Direita</b></h4></label>
		    	<input type="number" class="form-control" id="panturrilhaDir" name="panturrilhaDir" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4><b>Panturrilha Esquerda</b></h4></label>
		    	<input type="number" class="form-control" id="panturrilhaEsq" name="panturrilhaEsq" placeholder="0,00">
		    </div>
	 	</div>

	 	<div class="box-body">
			<div class="col-md-3">
		    	<label for="sku"><h4><b>Coxa Direita</b></h4></label>
		    	<input type="number" class="form-control" id="coxaDir" name="coxaDir" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4><b>Coxa Esquerda</b></h4></label>
		    	<input type="number" class="form-control" id="coxaEsq" name="coxaEsq" placeholder="0,00">
		    </div>
	 	</div>
        <br>
        <div>
        	<div class="col-md-6">
        	<button type="submit" class="btn btn-success">Cadastrar</button>
	 		</div>
        </div>
	</form>
    </div>
    <!-- /.box-body -->
</div>

@endsection