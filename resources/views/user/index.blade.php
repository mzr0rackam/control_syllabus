@extends('layouts.app')

@section('htmlheader_title')
  Usuarios
@endsection

@section('contentheader_title')
  Usuarios del Sistema
@endsection


@section('main-content')
  {{-- @include('layouts/partials/admin_panel_header') --}}
  <div class="box">
    <div class="box-body">
      <a class="btn btn-small btn-success" href="{{ url('admin/users/create') }}">Crear un nuevo Usuario</a>
      @if($users)
      <table class="table table-bordered table-hover" width="100%" cellspacing="0">
        <thead>
          <tr>
            <td>ID</td>
            <td>Nombre de Usuario</td>
            <td>Correo Electrónico</td>
            <td>Acciones</td>
          </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $value)
          <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>
              <a class="btn btn-small btn-info" href="{{ url('admin/users/' . $value->id . '/edit') }}">Editar</a>
              {{ Form::open(['url' => 'admin/users/' . $value->id, 'class' => 'pull-right']) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Eliminar', ['class' => 'btn btn-small btn-danger']) }}
              {{ Form::close() }}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      @else
        <h4>No hay Usuarios por mostrar</h4>
      @endif
    </div>
  </div>
@endsection


