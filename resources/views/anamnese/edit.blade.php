@extends('adminlte::page')
@section('title','Tecnodiet - Anamnese')
@section('content')


<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title"><b>Anamnese</b></h3>			
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
		
        <form method="POST" enctype="multipart/form-data" action="{{action('AnamneseController@update', $id)}}">
		@csrf
		<input type="hidden" name="_method" value="PATCH">
		<div class="box-body">
			<div class="col-md-12">
				<label for="casoClinico"><h4>Caso Clínico</h4></label>
				<textarea class="form-control" id="casoClinico" name="casoClinico" rows="3" placeholder="Motivo do paciente, observações gerais, objetivos..." required></textarea>
			</div>
	 	</div>

	 	<div class="box-body">
	 		<div class="col-md-3">
		   		<label for="restricao"><h4>Restrição Alimentar</h4></label>
		   		<br>
		   		<div class="col-md-0">
                	<label>
                		<input type="radio" name="restricao" value="nao">
                		<label for="descricao">Não</label>
               		</label>
                </div>
                <div class="col-md-0">
                	<label>
                		<input type="radio" name="restricao" value="Vegano">
                		<label for="descricao">Vegano</label>
                	</label>
                </div>
                <div class="col-md-0">
                	<label>
                		<input type="radio" name="restricao" value="vegetariano">
                		<label for="descricao">Vegetariano</label>
                	</label>
                </div>
	 		</div>

	 		<div class="col-md-3">
		   		<div class="form-group">
                	<label>
                  		<input type="checkbox" class="flat-red" value="1">
                	</label>
                	<label >
                  		<h4>Ingere bebida alcoólica</h4>
                	</label>
              	</div>
		   	</div>
		   	<div class="col-md-3">
		   		<div class="form-group">
                	<label>
                  		<input type="checkbox" class="flat-red" value="1">
                	</label>
                	<label >
                  		<h4>Refeições fora de casa</h4>
                	</label>
              	</div>
		   	</div>
		   	<div class="col-md-3">
		   		<div class="form-group">
                	<label>
                  		<input type="checkbox" class="flat-red" value="1">
                	</label>
                	<label >
                  		<h4>Fumante</h4>
                	</label>
              	</div>
		   	</div>
		   	
	 	</div>

	 	<div class="box-body">
			<div class="col-md-12">
				<label for="obsRestricao"><h4>Observações</h4></label>
				<textarea class="form-control" id="obsRestricao" name="obsRestricao" rows="3" placeholder="Refeições fora de casa, quanto fuma, quanto e o que bebe..." ></textarea>
			</div>
	 	</div>

	 	<div class="box-body">
	 		<div class="col-md-6">
		   		<label for="sono"><h4>Hábitos de Sono</h4></label>
		   		<br>
		   		<div class="col-md-3">
                	<label>
                		<input type="radio" name="sono" value="0">
                		<label for="descricao">Dorme bem</label>
               		</label>
                </div>
                <div class="col-md-3">
                	<label>
                		<input type="radio" name="sono" value="1">
                		<label for="descricao">Dorme mal</label>
                	</label>
                </div>
	 		</div>
	 		<div class="col-md-6">
	 			<div class="form-group">
	 				<label for="hrSono"><h4>Horas de sono</h4></label>
		    		<input type="time" class="form-control" id="hrSono" name="hrSono">
	 			</div>
	 		</div>
	 	</div>

	 	<div class="box-body">
	 		<div class="col-md-3">
				<label for="obsSono"><h4>Observações do Sono</h4></label>
			</div>	
			<div class="col-md-6">	
				<textarea class="form-control" id="obsSono" name="obsSono" rows="1" placeholder="Observações do Sono" ></textarea>
	 		</div>
	 	</div>
	 	<div class="box-body">
	 		<div class="col-md-12">
	 			<label for="exercícios"><h4>Exercícios</h4></label>
				<textarea class="form-control" id="exercícios" name="exercícios" rows="3" placeholder="Exercícios Praticados" ></textarea>
	 		</div>
	 	</div>

	 	<div class="box-body">
	 		<div class="col-md-6">
	 			<label for="patologias"><h4>Patologias</h4></label>
				<textarea class="form-control" id="patologias" name="patologias" rows="2"></textarea>
	 		</div>
	 		<div class="col-md-6">
	 			<label for="medicamentos"><h4>Medicamentos</h4></label>
				<textarea class="form-control" id="medicamentos" name="medicamentos" rows="2"></textarea>
	 		</div>
	 	</div>

	 	<div class="box-body">
	 		<div class="col-md-6">
	 			<label for="exames"><h4>Exames</h4></label>
				<textarea class="form-control" id="exames" name="exames" rows="2"></textarea>
	 		</div>
	 		<div class="col-md-6">
	 			<label for="historicoFamiliar"><h4>Historico Familiar</h4></label>
				<textarea class="form-control" id="historicoFamiliar" name="historicoFamiliar" rows="2"></textarea>
	 		</div>
	 	</div>
	 	<div class="box-body">
	 		<div class="col-md-4">
		   		<label for="apetite"><h4>Apetite</h4></label>
		   		<br>
		   		<div class="col-md-0">
                	<label>
                		<input type="radio" name="apetite" value="normal">
                		<label for="descricao">Normal </label>
               		</label>
                </div>
                <div class="col-md-0">
                	<label>
                		<input type="radio" name="apetite" value="aumentado">
                		<label for="descricao">Aumentado</label>
                	</label>
                </div>
                <div class="col-md-0">
                	<label>
                		<input type="radio" name="apetite" value="diminuido">
                		<label for="descricao">Diminuido</label>
                	</label>
                </div>
	 		</div>
	 		<div class="col-md-4">
		   		<label for="mastigacao"><h4>Mastigacao</h4></label>
		   		<br>
		   		<div class="col-md-0">
                	<label>
                		<input type="radio" name="mastigacao" value="normal">
                		<label for="descricao">Normal</label>
               		</label>
               	</div>
                <div class="col-md-0">
                	<label>
                		<input type="radio" name="mastigacao" value="rapida">
                		<label for="descricao">Rapida</label>
                	</label>
                </div>
                <div class="col-md-0">
                	<label>
                		<input type="radio" name="mastigacao" value="lenta">
                		<label for="descricao">Lenta</label>
               		</label>
                </div>
	 		</div>
	 		<div class="col-md-4">
		   		<label for="intestinal"><h4>Hábito Intestinal</h4></label>
		   		<br>
		   		<div class="col-md-0">
                	<label>
                		<input type="radio" name="intestinal" value="Normal">
                		<label for="descricao">Normal</label>
               		</label>
               	</div>
                <div class="col-md-0">
                	<label>
                		<input type="radio" name="intestinal" value="Constipante">
                		<label for="descricao">Constipante</label>
                	</label>
                </div>
                <div class="col-md-0">
                	<label>
                		<input type="radio" name="intestinal" value="Diarréico">
                		<label for="descricao">Diarréico</label>
               		</label>
                </div>
                <div class="col-md-0">
                	<label>
                		<input type="radio" name="intestinal" value="Variado">
                		<label for="descricao">Variado</label>
               		</label>
                </div>
	 		</div>
	 	</div>

	 	<div class="box-body">
	 		<div class="col-md-6">
	 			<label for="suplementos"><h4>Suplementos alimentares</h4></label>
				<textarea class="form-control" id="suplementos" name="suplementos" rows="2" placeholder="Se ultiliza de algum suplemento alimentar" ></textarea>
	 		</div>
	 		<div class="col-md-6">
	 			<label for="alergias"><h4>Alergia alimentar</h4></label>
				<textarea class="form-control" id="alergias" name="alergias" rows="2" placeholder="Tem alergia a algum alimento?" ></textarea>
	 		</div>
	 	</div>

	 	<div class="box-body">
	 		<div class="col-md-12">
	 			<label for="intolerancias"><h4>Intolerâncias alimentares</h4></label>
				<textarea class="form-control" id="intolerancias" name="intolerancias" rows="2"></textarea>
	 		</div>
	 	</div>

	 	<div class="box-body">
	 		<div class="col-md-12">
	 			<label for="obsGeral"><h4>Observação Geral</h4></label>
				<textarea class="form-control" id="obsGeral" name="obsGeral" rows="4"></textarea>
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