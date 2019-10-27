@extends('adminlte::page')
@section('title','Tecnodiet - Dados Cadastro')
@section('content')

<div class="box box-success">
	<div class="box-header with-border">
        <h2 class="box-title"><b>Dr. {{$nutricionista->name}}</b></h2>	
    </div>

    <div class="box-body">
    	<div class="col-md-8">
    		<ul>
				<h4><strong>Email</strong> {{$nutricionista->email}}</h4>
				<h4><strong>Telefone</strong> {{$nutricionista->telefone}}</h4>
                
				<h4><strong>CRN</strong> {{$nutricionista->crn}}</h4>
				<h4><strong>Rua</strong> {{$logradouro->rua}}</h4>
				<h4><strong>Bairro</strong> {{$logradouro->bairro}}</h4>
				<h4><strong>Cep</strong> {{$logradouro->cep}}</h4>
				<h4><strong>Cidade</strong> {{$logradouro->cidade}}</h4>
				<h4><strong>Criado em: </strong> {{date("d/m/Y H:i", strtotime($nutricionista->created_at))}}</h4>
			</ul>
    	</div>

    	<div class="col-md-12">
    		<div class="row">
    			<br>
    			<a href="{{URL::to('nutricionista/' .$nutricionista->id. '/edit')}}"><button class="btn btn-info">Editar Cadastro</button></a>
    		</div>
    	</div>
	</div>
</div>







@endsection