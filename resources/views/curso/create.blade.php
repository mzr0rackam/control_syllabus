@extends('layouts.app')

@section('htmlheader_title')
  Cursos
@endsection

@section('contentheader_title')
  Crear nuevo Curso
@endsection


@section('main-content')
  {{-- @include('layouts/partials/admin_panel_header') --}}
  <div class="box">
    <div class="box-body">
      {{ Form::open(['url' => 'cursos']) }}
        
        <div class="form-group">
          {{ Form::label('codigo_curso', 'Código de curso') }}
          {{ Form::text('codigo_curso', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('numero_curso', 'Número de curso') }}
          {{ Form::text('numero_curso', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('nombre_curso', 'Nombre de Curso') }}
          {{ Form::text('nombre_curso', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('horas_teoria', 'Número de horas de teoría') }}
          {{ Form::text('horas_teoria', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('horas_practica', 'Número de horas de práctica') }}
          {{ Form::text('horas_practica', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
          {{ Form::label('horas_labo', 'Número de horas de laboratorio') }}
          {{ Form::text('horas_labo', null, ['class' => 'form-control']) }}
        </div>
      
        <div class="form-group">
          {{ Form::label('creditos_curso', 'Créditos del Curso') }}
          {{ Form::text('creditos_curso', null, ['class' => 'form-control']) }}
        </div>
      
        <div class="form-group">
          {{ Form::label('ciclo_curso', 'Ciclo del Curso') }}
          {{ Form::text('ciclo_curso', null, ['class' => 'form-control']) }}
        </div>
      
        <div class="form-group">
          {{ Form::label('tipo_curso', 'Tipo del Curso') }}
          {{ Form::text('tipo_curso', null, ['class' => 'form-control']) }}
        </div>
      
        <div class="form-group">
          {{ Form::label('estado_curso', 'Estado del Curso') }}
          {{ Form::text('estado_curso', null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Agregar Curso', ['class' => 'btn btn-primary']) }}

      {{ Form::close() }}
    </div>
  </div>
@endsection


