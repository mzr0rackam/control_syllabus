@extends('layouts.app')

@section('htmlheader_title')
  Usuarios
@endsection

@section('contentheader_title')
  Editar Usuario
@endsection


@section('main-content')
  {{-- @include('layouts/partials/admin_panel_header') --}}
  <div class="box">
    <div class="box-body">
      {{ Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) }}

      <div class="form-group">
        {{ Form::label('name', 'Nombre') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
      </div>

      <div class="form-group">
        {{ Form::label('email', 'Correo Electrónico') }}
        {{ Form::email('email', null, ['class' => 'form-control']) }}
      </div>

      <div class="form-group">
        {{ Form::label('role', 'Role') }}
        {{ Form::select('role', $list_roles, isset($role[0]) ? $role[0]['id'] : null, [
          'class' => 'form-control',
          'required'
        ]) }}
      </div>

      {{ Form::submit('Actualizar', ['class' => 'btn btn-primary']) }}

      {{ Form::close() }}
    </div>
  </div>
@endsection