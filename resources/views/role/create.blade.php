@extends('layouts.app')

@section('htmlheader_title')
  Roles
@endsection

@section('contentheader_title')
  Crear nuevo Rol
@endsection


@section('main-content')
  {{-- @include('layouts/partials/admin_panel_header') --}}
  <div class="box">
    <div class="box-body">
      {{ Form::open(array('url' => 'admin/roles')) }}

        <div class="form-group">
          {{ Form::label('name', 'Nombre') }}
          {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
          {{ Form::label('display_name', 'Nombre para Mostrar') }}
          {{ Form::text('display_name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
          {{ Form::label('description', 'Descripción') }}
          {{ Form::text('description', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Crear Rol', array('class' => 'btn btn-primary')) }}

      {{ Form::close() }}
    </div>
  </div>
@endsection


