@extends('layouts.auth')

@section('htmlheader_title')
  Ingreso
@endsection

@section('content')

<body class="hold-transition">
  <div class="main">
    <div class="sidebar-info"></div>
    <div class="sidebar-login">
      <div id="app" v-cloak>
        <div class="login-box">
          <div class="login-logo">
            <a href="{{ url('/home') }}">SISTEMA DE <b>CONTROL DE SYLLABUS</b></a>
          </div><!-- /.login-logo -->

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <div class="login-box-body">
            <p class="login-box-msg"> {{ trans('adminlte_lang::message.siginsession') }} </p>
            {!! Form::open(['url' => '/login','method' => 'post']) !!}
              {!! Form::token() !!}

              <div class="form-group has-feedback">
                {!! Form::email('email', null, ['class' => 'form-control','placeholder' => trans('adminlte_lang::message.email')]) !!}
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>

              <div class="form-group has-feedback">
                {!! Form::password('password', null, ['class' => 'form-control','placeholder' => trans('adminlte_lang::message.password')]) !!}
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>

              <div class="row">
                <div class="col-xs-8"></div>
                <div class="col-xs-offset-4 col-md-offset-6 col-sm-offset-6 col-xs-8 col-md-6 col-sm-6">
                  <button type="submit" class="btn btn-primary btn-block btn-flat sign-buttons">Ingresar</button>
                </div>
              </div>

            {!! Form::close() !!}

            {{-- <login-form name="{{ config('auth.providers.users.field','email') }}"
                        domain="{{ config('auth.defaults.domain','') }}"></login-form> --}}

            
            <a href="{{ url('/password/reset') }}">{{ trans('adminlte_lang::message.forgotpassword') }}</a><br>
            <a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a>
          </div>

        </div>
      </div>      
    </div>
  </div>

    
  @include('adminlte::layouts.partials.scripts_auth')

  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>

@endsection
