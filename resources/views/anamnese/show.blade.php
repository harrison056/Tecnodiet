@extends('adminlte::page')
@section('title','Tecnodiet - Anamnese')
@section('content')


@if($message = Session::get('success'))
	<div class="alert alert-success">
		{{$message}}
	</div>
@endif

<div class="box box-success">
	<div class="box-header with-border">
        <h2 class="box-title"><b>Anamnese - <a href="{{URL::to('paciente')}}/{{$paciente->id}}">{{$paciente->nome}}</a></b></h2>	
    </div>

    <div class="box-body">
        <div class="col-md-12">
            <h4>Caso Clínico</h4>
            <p>{{$anamnese->casoClinico}}</p>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-3">
              <label><h4>Restrição Alimentar:</h4></label>
            <label> {{$anamnese->restricao}}</label>
        </div>
        <div class="col-md-3">
            <label><h4>Bebida Alcoólica:</h4></label>
                @if($anamnese->restricao == 1)
                    <label> Sim </label>
                @else
                    <label> Não </label>
                @endif
        </div>
        <div class="col-md-3">
            <label><h4>Refeições fora de casa:</h4></label>
                @if($anamnese->foraDeCasa == 1)
                    <label> Sim </label>
                @else
                    <label> Não </label>
                @endif
        </div>
        <div class="col-md-3">
            <label><h4>Fumante:</h4></label>
                @if($anamnese->fumante == 1)
                    <label> Sim </label>
                @else
                    <label> Não </label>
                @endif
        </div>
        @if($anamnese->obsRestricao != null)
        <div class="col-md-12">
            <h4>Observações</h4>
            <p>{{$anamnese->obsRestricao}}</p>
        </div>
        @endif
    </div>
    <div class="box-body">
        <div class="col-md-3">
            <label><h4>Hábitos do sono:</h4></label>
            @if($anamnese->sono == 0)
                <label> Dorme bem </label>
            @else
                <label> Dorme mal </label>
            @endif
        </div>
        <div class="col-md-3">
            <label><h4>Horas de Sono: </h4></label>
            <label>{{date("H:i", strtotime($anamnese->hrSono))}}</label>
        </div>
        @if($anamnese->obsSono != null)
        <div class="col-md-12">
            <h4>Observações do sono:</h4>
            <p>{{$anamnese->obsSono}}</p>
        </div>
        @endif

        @if($anamnese->exercicio != null)
            <div class="col-md-12">
                <h4>Exercícos:</h4>
                <p>{{$anamnese->exercicio}}</p>
            </div>
        @endif 

        @if($anamnese->patologias != null)
            <div class="col-md-6">
                <h4>Patologias:</h4>
                <p>{{$anamnese->patologias}}</p>
            </div>
        @endif 

        @if($anamnese->medicamentos != null)
            <div class="col-md-6">
                <h4>Medicamentos:</h4>
                <p>{{$anamnese->medicamentos}}</p>
            </div>
        @endif



    </div>
</div>


@endsection