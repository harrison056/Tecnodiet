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
		    	<label for="sku"><h4>Altura</h4></label>
		    	<input type="number" class="form-control" id="altura" name="altura" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Peso</h4></label>
		    	<input type="number" class="form-control" id="peso" name="peso" placeholder="0,00">
		    </div>
		    
	 	</div>

	 	<div class="box-body">
	 		<div class="col-md-12">
	 			<h4><b>Membros superiores</b></h4>
	 		</div>

		   	<div class="col-md-3">
		   		<label for="descricao"><h4>Braço Direito Relaxado</h4></label>
		   		<input type="number" class="form-control" id="bracoDirRelaxado" name="bracoDirRelaxado" placeholder="0,00"></input>
		   	</div>
		   	<div class="col-md-3">
	 			<label for="descricao"><h4>Braço Esquerdo Relaxado</h4></label>
            	<input type="number" class="form-control" id="bracoEsqRelaxado" name="bracoEsqRelaxado"placeholder="0,00"></input>
        	</div>
        	<div class="col-md-3">
        		<label for="descricao"><h4>Braço Direito Contraído</h4></label>
            	<input type="number" class="form-control" id="bracoDirContraido" name="bracoDirContraido" placeholder="0,00"></input>
        	</div>
        	<div class="col-md-3">
        		<label for="descricao"><h4>Braço Esquerdo Contraído</h4></label>
            	<input type="number" class="form-control" id="bracoEsqContraido" name="bracoEsqContraido" placeholder="0,00"></input>
        	</div>
	 	</div>

	 	<div class="box-body">
			<div class="col-md-3">
		    	<label for="sku"><h4>Antebraço Direito</h4></label>
		    	<input type="number" class="form-control" id="antebracoDir" name="antebracoDir" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Antebraço Esquerdo</h4></label>
		    	<input type="number" class="form-control" id="antebracoEsq" name="antebracoEsq" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="sku"><h4>Punho Direito</h4></label>
		    	<input type="number" class="form-control" id="punhoDir" name="punhoDir" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Punho Esquerdo</h4></label>
		    	<input type="number" class="form-control" id="punhoEsq" name="punhoEsq" placeholder="0,00">
		    </div>
	 	</div>

	 	<div class="box-body">

	 		<div class="col-md-12">
	 			<h4><b>Tronco</b></h4>
	 		</div>

			<div class="col-md-3">
		    	<label for="sku"><h4>Pescoço</h4></label>
		    	<input type="number" class="form-control" id="pescoco" name="pescoco" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Ombro</h4></label>
		    	<input type="number" class="form-control" id="ombro" name="ombro" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="sku"><h4>Peitoral</h4></label>
		    	<input type="number" class="form-control" id="peitoral" name="peitoral" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Cintura</h4></label>
		    	<input type="number" class="form-control" id="cintura" name="cintura"placeholder="0,00" >
		    </div>
	 	</div>

	 	<div class="box-body">
			<div class="col-md-3">
		    	<label for="sku"><h4>Abdomen</h4></label>
		    	<input type="number" class="form-control" id="abdomen" name="abdomen" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Quadril</h4></label>
		    	<input type="number" class="form-control" id="quadril" name="quadril" placeholder="0,00">
		    </div>
		    </div>
	 	</div>

	 	<div class="box-body">
	 		<div class="col-md-12">
	 			<h4><b>Membros Inferiores</b></h4>
	 		</div>
	 		<div class="col-md-3">
		    	<label for="sku"><h4>Panturrilha Direita</h4></label>
		    	<input type="number" class="form-control" id="panturrilhaDir" name="panturrilhaDir" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Panturrilha Esquerda</h4></label>
		    	<input type="number" class="form-control" id="panturrilhaEsq" name="panturrilhaEsq" placeholder="0,00">
		    </div>
			<div class="col-md-3">
		    	<label for="sku"><h4>Coxa Direita</h4></label>
		    	<input type="number" class="form-control" id="coxaDir" name="coxaDir" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Coxa Esquerda</h4></label>
		    	<input type="number" class="form-control" id="coxaEsq" name="coxaEsq" placeholder="0,00">
		    </div>
	 	</div>
	 	<div class="box-body">
	 		<div class="col-md-12">
	 			<h4><b>Diametros Ósseos</b></h4>
	 		</div>
	 		<div class="col-md-3">
		    	<label for="titulo"><h4>Punho</h4></label>
		    	<input type="number" class="form-control" id="punho" name="punho" placeholder="0,00">
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Fêmur</h4></label>
		    	<input type="number" class="form-control" id="femur" name="femur" placeholder="0,00">
		    </div>
	 	</div>
	 	<div class="box-body">
	 		<div>
        		<div class="col-md-12">
        			<button type="submit" class="btn btn-success">Cadastrar</button>
	 			</div>
        	</div>
	 	</div>
        
	</form>
    </div>
</div>

@endsection