@extends('layouts.app')

@section('htmlheader_title')
  Docentes
@endsection

@section('contentheader_title')
  Lista de Docentes
@endsection


@section('main-content')

  <div class="box">
    <div class="box-body">
      <a class="btn btn-small btn-success" href="{{ url('docentes/create') }}">Agregar un nuevo Docente</a>
      @if($docentes)
      <table class="table table-bordered table-hover" width="100%" cellspacing="0">
        <thead>
          <tr>
            <td>ID</td>
            <td>Nombre de Docente</td>
            <td>Correo Electrónico</td>
            <td>Acciones</td>
          </tr>
        </thead>
        <tbody>
        @foreach($docentes as $index => $docente)
          <tr>
            <td>{{ $docente->codigo_docente }}</td>
            <td>{{ $docente->nombre_docente }}</td>
            <td>{{ $docente->correo_docente }}</td>
            <td>
              <a class="btn btn-small btn-info" href="{{ url('docentes/' . $docente->id . '/edit') }}">Editar</a>
              {{ Form::open(['url' => 'docentes/' . $docente->id, 'class' => 'pull-right']) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Eliminar', ['class' => 'btn btn-small btn-danger']) }}
              {{ Form::close() }}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      @else
        <h4>No hay Docentes por mostrar</h4>
      @endif
    </div>
  </div>
@endsection