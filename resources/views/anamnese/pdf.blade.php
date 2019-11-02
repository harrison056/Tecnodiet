<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ficha Antropométrica</title>
	<style type="text/css">
		.campo{
		}	
		.campo2{
			display:inline;
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

    <h4>Caso Clínico</h4>
    <label> {{$anamnese->casoClinico}} </label>	<br>
    
    
    <label><h4>Restrição Alimentar:</h4>  {{$anamnese->restricao}}</label>
     
        
    <h4>Bebida Alcoólica:</h4>
    @if($anamnese->restricao == 1)
        <label> Sim </label>
    @else
        <label> Não </label>
    @endif
        
    <label><h4>Refeições fora de casa:</h4></label>
    @if($anamnese->foraDeCasa == 1)
        <label> Sim </label>
    @else
        <label> Não </label>
    @endif
        
    <label><h4>Fumante:</h4></label>
        @if($anamnese->fumante == 1)
            <label> Sim </label>
        @else
            <label> Não </label>
        @endif
        
        @if($anamnese->obsRestricao != null)
        <div class="col-md-12">
            <h4>Observações</h4>
            <p>{{$anamnese->obsRestricao}}</p>
        
        @endif
    
            <label><h4>Hábitos do sono:</h4></label>
            @if($anamnese->sono == 0)
                <label> Dorme bem </label>
            @else
                <label> Dorme mal </label>
            @endif
        
            <label><h4>Horas de Sono: </h4></label>
            <label>{{date("H:i", strtotime($anamnese->hrSono))}}</label>
        
        @if($anamnese->obsSono != null)
        
            <h4>Observações do sono:</h4>
            <p>{{$anamnese->obsSono}}</p>
        
        @endif

        @if($anamnese->exercicio != null)
            
                <h4>Exercícos:</h4>
                <p>{{$anamnese->exercicio}}</p>
           
        @endif 

        @if($anamnese->patologias != null)
            
                <h4>Patologias:</h4>
                <p>{{$anamnese->patologias}}</p>
            
        @endif 

        @if($anamnese->medicamentos != null)
            
                <h4>Medicamentos:</h4>
                <p>{{$anamnese->medicamentos}}</p>
            
        @endif

        @if($anamnese->exames != null)
            
                <h4>Exames:</h4>
                <p>{{$anamnese->exames}}</p>
            
        @endif

        @if($anamnese->historicoFamiliar != null)
            
                <h4>Histórico Familiar:</h4>
                <p>{{$anamnese->historicoFamiliar}}</p>
            
        @endif
    
              <label><h4>Apetite:</h4></label>
            <label> {{$anamnese->apetite}}</label>
        
              <label><h4>Mastigacão:</h4></label>
            <label> {{$anamnese->mastigacao}}</label>
        
              <label><h4>Intestinal:</h4></label>
            <label> {{$anamnese->intestinal}}</label>
        
        @if($anamnese->suplementos != null)
            
                <h4>Suplementos:</h4>
                <p>{{$anamnese->suplementos}}</p>
            
        @endif

        @if($anamnese->alergias != null)
            
                <h4>Alergias:</h4>
                <p>{{$anamnese->alergias}}</p>
            
        @endif
    
        @if($anamnese->intolerancias != null)
            
                <h4>Intolerâncias alimentares:</h4>
                <p>{{$anamnese->intolerancias}}</p>
            
        @endif
    
        @if($anamnese->obsGeral != null)
            
                <h4>Observação Geral:</h4>
                <p>{{$anamnese->obsGeral}}</p>
            
        @endif
    
</fieldset>
	
</body>
</html>