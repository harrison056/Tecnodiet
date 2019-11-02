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

        @if($anamnese->exames != null)
            <div class="col-md-6">
                <h4>Exames:</h4>
                <p>{{$anamnese->exames}}</p>
            </div>
        @endif

        @if($anamnese->historicoFamiliar != null)
            <div class="col-md-6">
                <h4>Histórico Familiar:</h4>
                <p>{{$anamnese->historicoFamiliar}}</p>
            </div>
        @endif
    </div>
    <div class="box-body">
        <div class="col-md-4">
              <label><h4>Apetite:</h4></label>
            <label> {{$anamnese->apetite}}</label>
        </div>

        <div class="col-md-4">
              <label><h4>Mastigacão:</h4></label>
            <label> {{$anamnese->mastigacao}}</label>
        </div>

        <div class="col-md-4">
              <label><h4>Intestinal:</h4></label>
            <label> {{$anamnese->intestinal}}</label>
        </div>
    </div>
    <div class="box-body">
        @if($anamnese->suplementos != null)
            <div class="col-md-6">
                <h4>Suplementos:</h4>
                <p>{{$anamnese->suplementos}}</p>
            </div>
        @endif

        @if($anamnese->alergias != null)
            <div class="col-md-6">
                <h4>Alergias:</h4>
                <p>{{$anamnese->alergias}}</p>
            </div>
        @endif
    </div>
    <br>
    <div class="box-body">
        @if($anamnese->intolerancias != null)
            <div class="col-md-12">
                <h4>Intolerâncias alimentares:</h4>
                <p>{{$anamnese->intolerancias}}</p>
            </div>
        @endif
    </div>
    <div class="box-body">
        @if($anamnese->obsGeral != null)
            <div class="col-md-12">
                <h4>Observação Geral:</h4>
                <p>{{$anamnese->obsGeral}}</p>
            </div>
        @endif
    </div>

    <div class="box-footer">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{URL::to('anamnese/' .$paciente->id. '/edit')}}"><button class="btn btn-default">Alterar Dados</button></a>
                </div>
                <div class="col-md-2">
                    <a href="{{URL::to('anamnese/' .$paciente->id. '/pdf')}}"><button class="btn btn-info">Gerar PDF</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection