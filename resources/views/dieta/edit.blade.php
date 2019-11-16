@extends('adminlte::page')
@section('title','Tecnodiet - Montar Dieta')
@section('content')

<div class="box box-success">
    <div class="box-header with-border">
    	<h3 class="box-title"><b>Montar Dieta</b></h3>
    </div>

    <div class="box-body">
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"> 
			Adicionar Refeição
		</button>
	</div>

	
</div>










<!-- modal -->

<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Refeição</h4>
      </div>

      <div class="modal-body">
        <div class="col-md-6">
          <label>Horário: </label>
          <input type="time" name="hora">
        </div>

        <div class="col-md-6">
          <form method="POST" id="form-busca" action="">
            <input type="text" class="form-control" id="busca" name="busca" placeholder="Buscar Alimentos">
          </form>          

          <ul class="resultado">
            
          </ul>

          <script type="text/javascript">
            $(function(){
              //Pesquisar os cursos sem refresh na página
              $("#busca").keyup(function(){
    
                var busca = $(this).val();
    
              //Verificar se há algo digitado
              if(busca != ''){
                var dados = { 
                  palavra : busca
                }   
                  $.post('busca.php', dados, function(retorna){
                    //Mostra dentro da ul os resultado obtidos 
                    $(".resultado").html(retorna);
                  });
                }else{
                  $(".resultado").html('');
                }   
              });
            });
          </script>

          
        </div>

      </div>
      <br>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Add Refeição</button>
      </div>
    </div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->


@endsection