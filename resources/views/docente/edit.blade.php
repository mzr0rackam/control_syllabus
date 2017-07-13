@extends('layouts.app')

@section('htmlheader_title')
  Docentes
@endsection

@section('contentheader_title')
  Editar Docente
@endsection


@section('main-content')

  <div class="box">
    <div class="box-body">
      {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}

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

      {{ Form::submit('Actualizar', array('class' => 'btn btn-primary')) }}

      {{ Form::close() }}
    </div>
  </div>
@endsection