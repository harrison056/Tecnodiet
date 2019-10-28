<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=" {{URL::to('dist/css/bootstrap.min.css')}} ">

    <title>Tecnodiet</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="/" class="navbar-brand mb-0"><img src="{{url('img/logo-pequeno.png')}}" style="width:40; height:35px;"><b>Tecno</b>Diet</a>
        <div class="navbar-nav ml-auto">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/login"><button type="button" class="btn btn-default btn-block">Entrar</button></a>
                </li>
                <li class="nav-item">
                    <a href="/register"><button type="button" class="btn btn-default btn-block">Cadastro</button></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col-mb-12">
            <img src="{{url('img/Inicial.png')}}">
        </div>
    </div>

    <script type="text/javascript" src="{{URL::to('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('dist/js/bootstrap.min.js')}}"></script>
  </body>
</html>