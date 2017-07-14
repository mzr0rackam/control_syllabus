@extends('layouts.app')

@section('htmlheader_title')
  Escuela de Sistemas
@endsection

@section('contentheader_title')
  Escuela de Sistemas
@endsection

<link rel="stylesheet" href="{{ asset('/css/customize/custom-sistemas-chart.css') }}">

@section('main-content')
  <div class="row">
    <div class="col-md-6">
      <div class="box">
        <div class="box-body">
          @if($cursos)
            <div id="ciclo_I" class="alumnos_curso"></div>
          @else
            <h4>No hay datos por mostrar</h4>
          @endif
        </div>
      </div>      
    </div>
    <div class="col-md-6">
      <div class="box">
        <div class="box-body">
          @if($cursos)
            <div id="ciclo_II" class="alumnos_curso" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
          @else
            <h4>No hay Cursos por mostrar</h4>
          @endif
        </div>
      </div>  
    </div>
  </div>
@endsection


