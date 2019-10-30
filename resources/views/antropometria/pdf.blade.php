<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ficha Antropométrica</title>
	<style type="text/css">
		.campo{
			padding: 10px;
		}	
	</style>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href=" {{URL::to('dist/css/bootstrap.min.css')}} ">
</head>
<body>
	<center>
		<h2 align="center">Ficha Antropométrica</h2>
	</center>
	<fieldset>
        <!-- campos -->
        <div class="" align="right">
        	<strong>Consulta:</strong>
    		<label>{{date("d/m/Y", strtotime($paciente->updated_at))}}</label>
    	</div>
    	<br>
    		<label for="Paciente">Paciente:</label>
    		<label for="Paciente">{{$paciente->nome}}</label>
		<br>
    		<label for="Idade">Idade:</label>
    		<input numero="name" id="Idade" value="" >
    	<br>
    		<label for="Sexo">Sexo:</label>
    		@if($paciente->sexo == 1)
    			<label>Masculino</label>
    		@else
    			<label>Feminino</label>
    		@endif
   	 	<br>
    		<label>E-mail:</label>
    		<label>{{$paciente->email}}</label>
		<br>

    </fieldset>


	
<fieldset>

	<div class="campo">
		<label><strong>IMC:</strong> {{$antropometria->imc}}</label>
	</div><label>
	<div class="campo">
		<strong>Peso Ideal:</strong> {{$antropometria->pesoIdeal}}</label>
	</div>
	<div class="campo">
		<label><strong>Altura:</strong> {{$antropometria->altura}} cm</label>
	</div>
	<div class="campo">
		<label><strong>Peso:</strong> {{$antropometria->peso}} Kg</label>
	</div>
	<div class="campo">
		<label><strong>Braço Direito Relaxado:</strong> {{$antropometria->bracoDirRelaxado}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Braço Esquerdo Relaxado:</strong> {{$antropometria->bracoEsqRelaxado}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Braço Direito Contraido:</strong> {{$antropometria->bracoDirContraido}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Braço Esquerdo Contraido:</strong> {{$antropometria->bracoEsqContraido}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Antebraço Direito:</strong> {{$antropometria->antebracoDir}}cm</label>
	</div>
	<div class="campo">	
		<label><strong>Antebraço Esquerdo:</strong> {{$antropometria->antebracoEsq}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Punho Direito:</strong> {{$antropometria->punhoDir}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Punho Esquerdo:</strong> {{$antropometria->punhoEsq}}cm</label>
	</div>

	<div class="campo">
		<label><strong>Pescoço:</strong> {{$antropometria->pescoco}}cm</label>
	</div>

	<div class="campo">
		<label><strong>Ombro:</strong> {{$antropometria->ombro}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Peitoral:</strong> {{$antropometria->peitoral}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Cintura:</strong> {{$antropometria->cintura}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Abdomen:</strong> {{$antropometria->abdomen}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Quadril:</strong> {{$antropometria->quadril}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Panturrilha Direita:</strong> {{$antropometria->panturrilhaDir}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Panturrilha Esquerda:</strong> {{$antropometria->panturrilhaEsq}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Coxa Direita:</strong> {{$antropometria->coxaDir}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Coxa Esquerda:</strong> {{$antropometria->coxaEsq}}cm</label>
	</div>
	<div class="campo">
		<label><strong>Punho:</strong> {{$antropometria->punho}}º</label>
	</div>
	<div class="campo">
		<label><strong>Femur:</strong> {{$antropometria->femur}}º</label>
	</div>
</fieldset>
	

<script type="text/javascript" src="{{URL::to('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('dist/js/bootstrap.min.js')}}"></script>		
</body>
</html>