<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ficha de dieta</title>
	<style type="text/css">
		.campo{
			padding: 10px;
		}	
	</style>
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

	<div class="campo" align="center">
		<label><strong>IMC:</strong> {{$antropometria->imc}}</label>
		<label><strong>Peso Ideal:</strong> {{$antropometria->pesoIdeal}}</label>
	</div>
		 
	<div class="campo" align="center">
		<label><strong>Altura:</strong> {{$antropometria->altura}} cm</label>
		<label><strong>Peso:</strong> {{$antropometria->peso}} Kg</label>
	</div>

	<div class="campo">
		<label><strong>Braço Direito Relaxado:</strong> {{$antropometria->bracoDirRelaxado}}cm</label>
		<label><strong>Braço Esquerdo Relaxado:</strong> {{$antropometria->bracoEsqRelaxado}}cm</label>
	</div>

	<div class="campo">
		<label><strong>Braço Direito Contraido:</strong> {{$antropometria->bracoDirContraido}}cm</label>
		<label><strong>Braço Esquerdo Contraido:</strong> {{$antropometria->bracoEsqContraido}}cm</label>
	</div>

	<div class="campo">
		<label><strong>Antebraço Direito:</strong> {{$antropometria->antebracoDir}}cm</label>
		<label><strong>Antebraço Esquerdo:</strong> {{$antropometria->antebracoEsq}}cm</label>
	</div>

	<div class="campo">
		<label><strong>Punho Direito:</strong> {{$antropometria->punhoDir}}cm</label>
		<label><strong>Punho Esquerdo:</strong> {{$antropometria->punhoEsq}}cm</label>
	</div>

	<div class="campo">
		<label><strong>Pescoço:</strong> {{$antropometria->pescoco}}cm</label>
		<label><strong>Ombro:</strong> {{$antropometria->ombro}}cm</label>
	</div>

	<div class="campo">
		<label><strong>Peitoral:</strong> {{$antropometria->peitoral}}cm</label>
		<label><strong>Cintura:</strong> {{$antropometria->cintura}}cm</label>
	</div>

	<div class="campo">
		<label><strong>Abdomen:</strong> {{$antropometria->abdomen}}cm</label>
		<label><strong>Quadril:</strong> {{$antropometria->quadril}}cm</label>
	</div>

	<div class="campo">
		<label><strong>Panturrilha Direita:</strong> {{$antropometria->panturrilhaDir}}cm</label>
		<label><strong>Panturrilha Esquerda:</strong> {{$antropometria->panturrilhaEsq}}cm</label>
	</div>

	<div class="campo">
		<label><strong>Coxa Direita:</strong> {{$antropometria->coxaDir}}cm</label>
		<label>Coxa Esquerda:</strong> {{$antropometria->coxaEsq}}cm</label>
	</div>

	<div class="campo">
		<label><strong>Punho:</strong> {{$antropometria->punho}}º</label>
		<label><strong>Femur:</strong> {{$antropometria->femur}}º</label>
	</div>
</fieldset>
		
</body>
</html>