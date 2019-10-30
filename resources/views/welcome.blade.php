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
        @if (Route::has('login'))
        <div class="navbar-nav ml-auto">
            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item">
                        <a href="{{ url('/nutricionista') }}"><button type="button" class="btn btn-default btn-block">Página Inicial</button></a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}"><button type="button" class="btn btn-default btn-block">Entrar</button></a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}"><button type="button" class="btn btn-default btn-block">Cadastro</button></a>
                        </li>
                    @endif  
                @endauth  
            </ul>
        </div>
        @endif
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
