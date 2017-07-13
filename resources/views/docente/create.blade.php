@extends('layouts.app')

@section('htmlheader_title')
  Docentes
@endsection

@section('contentheader_title')
  Crear nuevo Docente
@endsection


@section('main-content')
  <div class="box">
    <div class="box-body">
      {{ Form::open(['url' => 'docentes']) }}

        <div class="form-group">
          {{ Form::label('name', 'Nombre') }}
          {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('email', 'Correo Electrónico') }}
          {{ Form::email('email', null, ['class' => 'form-control']) }}
        </div>
      
        <div class="form-group">
          {{ Form::label('password', 'Contraseña') }}
          {{ Form::password('password', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('role', 'Rol') }}
          {{ Form::select('role', $roles, null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Crear Usuario', ['class' => 'btn btn-primary']) }}

      {{ Form::close() }}
    </div>
  </div>
@endsection
