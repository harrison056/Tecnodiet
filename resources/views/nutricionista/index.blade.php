@extends('adminlte::page')

@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success">
        {{$message}}
    </div>
@endif

<div class="row">
	<div class="col-md-12">
		<div align="center">
			<img src="{{url('img/Logo.png')}}" style="width:250; height:155px;">
		</div>
	</div>
</div>



<div class="col-md-2">
</div>

<div class="row">
	<div class="col-md-8">
		<form method="POST" action="{{url('paciente/busca')}}">
			@csrf
				<div class="input-group">
					<input type="text" class="form-control" id="busca" name="busca" value="{{$buscar}}" placeholder="Buscar Pacientes">
					<span class="input-group-btn">
						<button class="btn btn-outline-secondary">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
		</form>
	</div>
</div>
<br>

<br>


<div class="col-md-1">
</div>

<div class="row">
	<div class="col-md-10">
              <!-- USERS LIST -->
    	<div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"><b>Pacientes</b></h3>
                <div class="box-tools pull-right">
                    <span class="label label-success">Adicionados Recentemente</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <ul class="users-list clearfix">
                @foreach($paciente as $pacientes)
                <li>
                    @if($pacientes->sexo == 1)
					   
                       <a class="users-list-name" href="{{URL::to('paciente')}}/{{$pacientes->id}}"><img src="{{url('img/Homem.jpg')}}" alt="User Image" style="width:250; height:110px;"><br>{{$pacientes->nome}}</a>
                    @else
                        <a class="users-list-name" href="{{URL::to('paciente')}}/{{$pacientes->id}}"><img src="{{url('img/Mulher.jpg')}}" alt="User Image" style="width:250; height:110px;"><br>{{$pacientes->nome}}</a>
                    @endif
                        
                </li>
                @endforeach
                <li>
                  	
                  	<a class="users-list-name" href="{{URL::to('paciente')}}/create"><img src="{{url('img/adcionar.png')}}" alt="User Image" style="width:250; height:110px;"><br>Adicionar Paciente</a>
                  	</li>
                </ul>
                  <!-- /.users-list -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
                <a href="/paciente" class="uppercase">Ver todos pacientes</a>
            </div>
        <!-- /.box-footer -->
        </div>
    <!--/.box -->
	</div>
</div>

@endsection