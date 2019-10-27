@extends('adminlte::page')

@section('content')

@if($message = Session::get('success'))
	<div class="alert alert-success">
		{{$message}}
	</div>
@endif

<div class="box box-success">
	<div class="box-header with-border">
        <h3 class="box-title"><b>{{$paciente->nome}}</b></h3>	
    </div>

    <div class="box-body">
    	<div class="col-md-8">
    		<ul>
				<li><strong>email</strong> {{$paciente->email}}</li>
				<li><strong>telefone</strong> {{$paciente->telefone}}</li>
				<li><strong>sexo</strong> {{$paciente->sexo}}</li>
				<li><strong>CPF</strong> {{$paciente->cpf}}</li>
				<li><strong>Rua</strong> {{$logradouro->rua}}</li>
				<li><strong>Bairro</strong> {{$logradouro->bairro}}</li>
				<li><strong>Cep</strong> {{$logradouro->cep}}</li>
				<li><strong>Cidade</strong> {{$logradouro->cidade}}</li>
				<li><strong>Adicionado em: </strong> {{date("d/m/Y H:i", strtotime($paciente->created_at))}}</li>
				<li><strong>Última atualização: </strong> {{date("d/m/Y H:i", strtotime($paciente->updated_at))}}</li>
			</ul>
    	</div>

    	<div class="col-md-4">
    		<div class="row">
    			<a href="{{URL::to('paciente/' .$paciente->id. '/edit')}}"><button class="btn btn-info">Editar Cadastro</button></a>
    		</div>
    		<br>
    		<div class="row">
    			<button class="btn btn-info">Dieta</button>
    		</div>
    		<br>
    		<div class="row">
    			<button class="btn btn-info" >Anamnese</button>
    		</div>
			<br>
    		<div class="row">
    			<a href="{{URL::to('antropometria')}}/{{$paciente->id}}"><button class="btn btn-info">Antropometria</button></a>
    		</div>
    		<br>
    		<div class="row">
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">Excluir</button>
    		</div>
    	</div>
	</div>
</div>

<!-- .modal -->

<div class="modal modal-danger fade" id="modal-danger">
    <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><strong>Deletar Paciente</strong></h4>
              </div>
              <div class="modal-body">
                <p>Tem certeza que deseja excluir paciente?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Fechar</button>
                <form method="POST" action="{{action('PacienteController@destroy', $paciente->id)}}">
					@csrf
					<input type="hidden" name="_method" value="DELETE">
					<button class="btn btn-outline">Excluir</button>
				</form>
              </div>
        </div>
            <!-- /.modal-content -->
    </div>
          <!-- /.modal-dialog -->
</div>



@endsection