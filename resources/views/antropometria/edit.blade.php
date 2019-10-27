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
		    	<input type="number" class="form-control" id="altura" name="altura" step=".01" placeholder="0,00" required>
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Peso</h4></label>
		    	<input type="number" class="form-control" id="peso" name="peso" step=".01" placeholder="0,00" required>
		    </div>
		    
	 	</div>

	 	<div class="box-body">
	 		<div class="col-md-12">
	 			<h4><b>Membros superiores</b></h4>
	 		</div>

		   	<div class="col-md-3">
		   		<label for="descricao"><h4>Braço Direito Relaxado</h4></label>
		   		<input type="number" class="form-control" id="bracoDirRelaxado" step=".01" name="bracoDirRelaxado" placeholder="0,00" required></input>
		   	</div>
		   	<div class="col-md-3">
	 			<label for="descricao"><h4>Braço Esquerdo Relaxado</h4></label>
            	<input type="number" class="form-control" id="bracoEsqRelaxado" step=".01" name="bracoEsqRelaxado"placeholder="0,00" required></input>
        	</div>
        	<div class="col-md-3">
        		<label for="descricao"><h4>Braço Direito Contraído</h4></label>
            	<input type="number" class="form-control" id="bracoDirContraido" step=".01" name="bracoDirContraido" placeholder="0,00" required></input>
        	</div>
        	<div class="col-md-3">
        		<label for="descricao"><h4>Braço Esquerdo Contraído</h4></label>
            	<input type="number" class="form-control" id="bracoEsqContraido" step=".01" name="bracoEsqContraido" placeholder="0,00" required></input>
        	</div>
	 	</div>

	 	<div class="box-body">
			<div class="col-md-3">
		    	<label for="sku"><h4>Antebraço Direito</h4></label>
		    	<input type="number" class="form-control" id="antebracoDir" step=".01" name="antebracoDir" placeholder="0,00" required>
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Antebraço Esquerdo</h4></label>
		    	<input type="number" class="form-control" id="antebracoEsq" step=".01" name="antebracoEsq" placeholder="0,00" required>
		    </div>
		    <div class="col-md-3">
		    	<label for="sku"><h4>Punho Direito</h4></label>
		    	<input type="number" class="form-control" id="punhoDir" step=".01" name="punhoDir" placeholder="0,00" required>
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Punho Esquerdo</h4></label>
		    	<input type="number" class="form-control" id="punhoEsq" step=".01" name="punhoEsq" placeholder="0,00" required>
		    </div>
	 	</div>

	 	<div class="box-body">

	 		<div class="col-md-12">
	 			<h4><b>Tronco</b></h4>
	 		</div>

			<div class="col-md-3">
		    	<label for="sku"><h4>Pescoço</h4></label>
		    	<input type="number" class="form-control" id="pescoco" step=".01" name="pescoco" placeholder="0,00" required>
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Ombro</h4></label>
		    	<input type="number" class="form-control" id="ombro" step=".01" name="ombro" placeholder="0,00" required>
		    </div>
		    <div class="col-md-3">
		    	<label for="sku"><h4>Peitoral</h4></label>
		    	<input type="number" class="form-control" id="peitoral" step=".01" name="peitoral" placeholder="0,00" required>
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Cintura</h4></label>
		    	<input type="number" class="form-control" id="cintura" step=".01" name="cintura"placeholder="0,00" required >
		    </div>
	 	</div>

	 	<div class="box-body">
			<div class="col-md-3">
		    	<label for="sku"><h4>Abdomen</h4></label>
		    	<input type="number" class="form-control" id="abdomen" step=".01" name="abdomen" placeholder="0,00" required>
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Quadril</h4></label>
		    	<input type="number" class="form-control" id="quadril" step=".01" name="quadril" placeholder="0,00" required>
		    </div>
		    </div>
	 	</div>

	 	<div class="box-body">
	 		<div class="col-md-12">
	 			<h4><b>Membros Inferiores</b></h4>
	 		</div>
	 		<div class="col-md-3">
		    	<label for="sku"><h4>Panturrilha Direita</h4></label>
		    	<input type="number" class="form-control" id="panturrilhaDir" step=".01" name="panturrilhaDir" placeholder="0,00" required>
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Panturrilha Esquerda</h4></label>
		    	<input type="number" class="form-control" id="panturrilhaEsq" step=".01" name="panturrilhaEsq" placeholder="0,00" required>
		    </div>
			<div class="col-md-3">
		    	<label for="sku"><h4>Coxa Direita</h4></label>
		    	<input type="number" class="form-control" id="coxaDir" step=".01" name="coxaDir" placeholder="0,00" required>
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Coxa Esquerda</h4></label>
		    	<input type="number" class="form-control" id="coxaEsq" step=".01" name="coxaEsq" placeholder="0,00" required>
		    </div>
	 	</div>
	 	<div class="box-body">
	 		<div class="col-md-12">
	 			<h4><b>Diametros Ósseos</b></h4>
	 		</div>
	 		<div class="col-md-3">
		    	<label for="titulo"><h4>Punho</h4></label>
		    	<input type="number" class="form-control" id="punho" step=".01" name="punho" placeholder="0,00" required>
		    </div>
		    <div class="col-md-3">
		    	<label for="titulo"><h4>Fêmur</h4></label>
		    	<input type="number" class="form-control" id="femur" step=".01" name="femur" placeholder="0,00" required>
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