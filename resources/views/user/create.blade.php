@extends('layouts.app')

@section('htmlheader_title')
  Usuarios
@endsection

@section('contentheader_title')
  Crear nuevo Usuario
@endsection


@section('main-content')
  {{-- @include('layouts/partials/admin_panel_header') --}}
  <div class="box">
    <div class="box-body">
      {{ Form::open(['url' => 'admin/users']) }}

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
          {{ Form::select('role', $list_roles, null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Crear Usuario', ['class' => 'btn btn-primary']) }}

      {{ Form::close() }}
    </div>
  </div>
@endsection


