@extends('layouts.app')

@section('htmlheader_title')
  Roles
@endsection

@section('contentheader_title')
  Roles del Sistema
@endsection


@section('main-content')
  {{-- @include('layouts/partials/admin_panel_header') --}}
  <div class="box">
    <div class="box-body">
        <a class="btn btn-small btn-success" href="{{ url('admin/roles/create') }}">Crear un nuevo Rol</a>
        <br>
        <br>
      @if($roles)
      <table class="table table-bordered table-hover" width="100%" cellspacing="0">
        <thead>
          <tr>
            <td>ID</td>
            <td>Nombre de Rol - Sistema</td>
            <td>Nombre de Rol - Usuario</td>
            <td>Descripción</td>
            <td>Acciones</td>
          </tr>
        </thead>
        <tbody>
        @foreach($roles as $key => $value)
          <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->display_name }}</td>
            <td>{{ $value->description }}</td>
            <td>
              <a class="btn btn-small btn-info" href="{{ url('admin/roles/' . $value->id . '/edit') }}">Editar</a>
              {{ Form::open(array('url' => 'admin/roles/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Eliminar', array('class' => 'btn btn-small btn-danger')) }}
              {{ Form::close() }}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      @else
        <h4>No hay Roles por mostrar</h4>
      @endif
    </div>
  </div>
@endsection


