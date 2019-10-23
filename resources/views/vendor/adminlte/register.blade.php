@extends('adminlte::master')

@section('adminlte_css')
    @yield('css')
@stop

@section('body_class', 'register-page')

@section('body')
    <div class="register-box">
        <div class="register-logo">
            <a href="/">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">{{ trans('adminlte::adminlte.register_message') }}</p>
            <form action="{{ url(config('adminlte.register_url', 'register')) }}" method="post">
                {{ csrf_field() }}

                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                           placeholder="{{ trans('adminlte::adminlte.full_name') }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.password') }}">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('tel') ? 'has-error' : '' }}">
                    <input type="text" name="tel" class="form-control" value="{{ old('tel') }}"
                           placeholder="Telefone">
                    <span class="glyphicon glyphicon-earphone form-control-feedback"></span>

                    @if ($errors->has('tel'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tel') }}</strong>
                        </span>
                    @endif
                </div>
                <script type="text/javascript" src="js/jquery.min.js"></script>
                <script type="text/javascript" src="{{ URL::asset('public/js/masked-telefone.js') }}"></script>

                <div class="form-group has-feedback {{ $errors->has('crn') ? 'has-error' : '' }}">
                    <input type="text" name="crn" class="form-control" value="{{ old('crn') }}"
                           placeholder="CRN">
                    <span class="glyphicon glyphicon-briefcase form-control-feedback"></span>
                    @if ($errors->has('crn'))
                        <span class="help-block">
                            <strong>{{ $errors->first('crn') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback {{ $errors->has('cep') ? 'has-error' : '' }}">
                    <input type="text" name="cep" class="form-control" value="{{ old('cep') }}"
                           placeholder="CEP">
                    <span class="glyphicon glyphicon-screenshot form-control-feedback"></span>
                    @if ($errors->has('cep'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cep') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback {{ $errors->has('rua') ? 'has-error' : '' }}">
                    <input type="text" name="rua" class="form-control" value="{{ old('rua') }}"
                           placeholder="Endereço">
                    <span class="glyphicon glyphicon-screenshot form-control-feedback"></span>
                    @if ($errors->has('rua'))
                        <span class="help-block">
                            <strong>{{ $errors->first('rua') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback {{ $errors->has('bairro') ? 'has-error' : '' }}">
                    <input type="text" name="bairro" class="form-control" value="{{ old('bairro') }}"
                           placeholder="Bairro">
                    <span class="glyphicon glyphicon-screenshot form-control-feedback"></span>
                    @if ($errors->has('bairro'))
                        <span class="help-block">
                            <strong>{{ $errors->first('bairro') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback {{ $errors->has('cidade') ? 'has-error' : '' }}">
                    <input type="text" name="cidade" class="form-control" value="{{ old('cidade') }}"
                           placeholder="Cidade">
                    <span class="glyphicon glyphicon-screenshot form-control-feedback"></span>
                    @if ($errors->has('cidade'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cidade') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group">
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected" disabled="disabled">Escolha um plano</option>
                  <option>Grátis - 10 Pacientes</option>
                  <option>R$ 29,9 - 500 Pacientes</option>
                  <option>R$ 99,90 - 5000 Pacientes</option>
                </select>
              </div>

                <button type="submit" class="btn btn-primary btn-block btn-flat">
                    {{ trans('adminlte::adminlte.register') }}
                </button>
            </form>
            <br>
            <p>
                <a href="{{ url(config('adminlte.login_url', 'login')) }}" class="text-center">
                    {{ trans('adminlte::adminlte.i_already_have_a_membership') }}
                </a>
            </p>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->
@stop

@section('adminlte_js')
    @yield('js')
@stop
