@extends('layouts.app')

@section('htmlheader_title')
  Cursos
@endsection

@section('contentheader_title')
  Cursos
@endsection


@section('main-content')
  <div class="box">
    <div class="box-body">
      <div class="row">
        <div class="col-sm-12">
          <a class="btn btn-small btn-success" href="{{ url('cursos/create') }}">
            <i class='fa fa-plus'></i>
            Agregar nuevo Curso
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="box">
    <div class="box-body">
      @if($cursos)
      <table id="data-table-curso" class="table table-bordered table-hover" width="100%" cellspacing="0">
        <thead>
          <tr>
            <td>Código</td>
            <td>Número</td>
            <td>Nombre</td>
            <td>Créditos</td>
            <td>Estado</td>
            <td>Ciclo</td>
            <td>Acciones</td>
          </tr>
        </thead>
        <tbody>
        @foreach($cursos as $index => $curso)
          <tr>
            <td>{{ $curso->codigo_curso }}</td>
            <td>{{ $curso->numero_curso }}</td>
            <td>{{ $curso->nombre_curso }}</td>
            <td>{{ $curso->creditos_curso }}</td>
            <td>{{ $curso->estado_curso }}</td>
            <td>{{ $curso->ciclo_curso }}</td>
            <td>
              <a class="btn btn-small btn-info" href="{{ url('cursos/' . $curso->codigo_curso . '/edit') }}">
                <i class='fa fa-pencil'></i>
                Editar
              </a>
              {{ Form::open(['url' => 'cursos/' . $curso->codigo_curso, 'class' => 'pull-right']) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Eliminar', ['class' => 'btn btn-small btn-danger']) }}
              {{ Form::close() }}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      @else
        <h4>No hay Cursos por mostrar</h4>
      @endif
    </div>
  </div>
@endsection


