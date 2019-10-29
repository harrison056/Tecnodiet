@extends('adminlte::page')
@section('title','Tecnodiet - Antropometria')
@section('content')


@if($message = Session::get('success'))
	<div class="alert alert-success">
		{{$message}}
	</div>
@endif

<div class="box box-success">
	<div class="box-header with-border">
        <h2 class="box-title"><b>Antropometria - <a href="{{URL::to('paciente')}}/{{$paciente->id}}">{{$paciente->nome}}</a></b></h2>	
    </div>

    <div class="box-body">
    	<div class="row">
    		<div class="col-md-1">
    		</div>
    		<div class="col-md-3">
				<h4><strong>IMC:</strong> {{$antropometria->imc}}</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Peso Ideal:</strong> {{$antropometria->pesoIdeal}}</h4>
			</div>
		</div>
		<div class="row">
    		<div class="col-md-1">
    		</div>
    		<div class="col-md-3">
				<h4><strong>Altura:</strong> {{$antropometria->altura}} cm</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Peso:</strong> {{$antropometria->peso}} Kg</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h3><b>Membros superiores</b></h3>
			</div>
		</div>
		<div class="row">
    		<div class="col-md-3">
				<h4><strong>Braço Direito Relaxado:</strong> {{$antropometria->bracoDirRelaxado}}cm</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Braço Esquerdo Relaxado:</strong> {{$antropometria->bracoEsqRelaxado}}cm</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Braço Direito Contraido:</strong> {{$antropometria->bracoDirContraido}}cm</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Braço Esquerdo Contraido:</strong> {{$antropometria->bracoEsqContraido}}cm</h4>
			</div>
		</div>
		<div class="row">
    		<div class="col-md-3">
				<h4><strong>Antebraço Direito:</strong> {{$antropometria->antebracoDir}}cm</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Antebraço Esquerdo:</strong> {{$antropometria->antebracoEsq}}cm</h4>	
			</div>
			<div class="col-md-3">
				<h4><strong>Punho Direito:</strong> {{$antropometria->punhoDir}}cm</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Punho Esquerdo:</strong> {{$antropometria->punhoEsq}}cm</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h3><b>Tronco</b></h3>
			</div>
		</div>
		<div class="row">
    		<div class="col-md-3">
				<h4><strong>Pescoço:</strong> {{$antropometria->pescoco}}cm</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Ombro:</strong> {{$antropometria->ombro}}cm</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Peitoral:</strong> {{$antropometria->peitoral}}cm</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Cintura:</strong> {{$antropometria->cintura}}cm</h4>
			</div>
		</div>
		<div class="row">
    		<div class="col-md-3">
				<h4><strong>Abdomen:</strong> {{$antropometria->abdomen}}cm</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Quadril:</strong> {{$antropometria->quadril}}cm</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h3><b>Membros inferiores</b></h3>
			</div>
		</div>
		<div class="row">
    		<div class="col-md-3">
				<h4><strong>Panturrilha Direita:</strong> {{$antropometria->panturrilhaDir}}cm</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Panturrilha Esquerda:</strong> {{$antropometria->panturrilhaEsq}}cm</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Coxa Direita:</strong> {{$antropometria->coxaDir}}cm</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Coxa Esquerda:</strong> {{$antropometria->coxaEsq}}cm</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h3><b>Diametros Ósseos</b></h3>
			</div>
		</div>
		<div class="row">
    		<div class="col-md-3">
				<h4><strong>Punho:</strong> {{$antropometria->punho}}º</h4>
			</div>
			<div class="col-md-3">
				<h4><strong>Femur:</strong> {{$antropometria->femur}}º</h4>
			</div>
		</div>
		<br>
		<div class="col-md-12">
			<div class="col-md-7">
				
			</div>
			<div class="col-md-5">
				<h4><strong>Última atualização: </strong> {{date("d/m/Y H:i",strtotime($antropometria->updated_at))}}</h4>
			</div>
		</div>
		<div class="col-md-12">
    		<div class="row">
    			<div class="col-md-2">
    				<a href="{{URL::to('antropometria/' .$paciente->id. '/edit')}}"><button class="btn btn-default">Alterar Dados</button></a>
    			</div>
    			<div class="col-md-2">
    				<a href="{{URL::to('antropometria/' .$paciente->id. '/pdf')}}"><button class="btn btn-info">Gerar PDF</button></a>
    			</div>
    		</div>
    	</div>
</div>


@endsection