@extends('adminlte::page')
@section('title','Tecnodiet - Gasto Energético')
@section('content')


<div class="box box-success">
    <div class="box-header with-border">
    	<h3 class="box-title"><b>Calculo Gasto Energético</b></h3>		
    </div>

    
    <form method="POST" enctype="multipart/form-data" action="{{action('GastoController@update', $id)}}">
    @csrf
    <input type="hidden" name="_method" value="PATCH">	
    	<div class="box-body">
			<div class="col-md-3">
		    	<label for="altura"><h4>Altura (em cm): </h4></label>
		    	<input class="form-control" name="altura" value="{{$antropometria->altura}}">
		    </div>
		    <div class="col-md-3">
		    	<label for="peso"><h4>Peso (Kg):</h4></label>
		    	<input class="form-control" name="peso" value="{{$antropometria->peso}}">
		    </div>
	 	</div>	

		<div class="box-body">
			<label>Protocolo:</label>
			<select class="form-control select2" name="protocolo" style="width: 50%;">
                <option selected="selected" disabled="disabled">Protocolo</option>
               	<option value="1">Harris & Benedict</option>
                <option value="2">Mifflin St-Jeor</option>
                <option value="3">Owen</option>
            </select>
		</div>

		<div class="box-body">
			<label>Atividade Física:</label>
			<select class="form-control select2" name="atividadeFisica" style="width: 50%;">
                <option selected="selected" disabled="disabled">Atividade Física</option>
               	<option value="1">Sedentário</option>
                <option value="2">Pouco Ativo</option>
                <option value="3">Ativo</option>
                <option value="4">Muito Ativo</option>
            </select>
		</div>

		<div class="box-body">
			<div class="col-md-3">
				@if($gasto->tmb != null)
					<label>TMB:</label>
					<input class="form-control" value="{{$gasto->tmb}}" disabled="disabled">
				@endif
			</div>
			<div class="col-md-3">
				@if($gasto->get != null)
					<label>GET:</label>
					<input class="form-control" value="{{$gasto->get}}" disabled="disabled">
				@endif
			</div>
		</div>

		<div class="box-footer">
        	<div class="col-md-12">
        		<button type="submit" class="btn btn-success">Salvar</button>
	 		</div>
	 	</div>
    </form>
</div>


@endsection