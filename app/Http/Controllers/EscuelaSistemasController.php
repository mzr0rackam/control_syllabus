<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso as Curso;

use App\Http\Traits\QueryTrait;

  
class EscuelaSistemasController extends Controller
{ 
  use QueryTrait;
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $cursos = Curso::all();
    //$alumno = Alumno::all()

    return view('escuela.sistemas.index', ['cursos'=>$cursos]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }

  public function getAlumnosByCurso($ciclo)
  { 
    //$alumnos_matriculados = MatriculaCursos::all();
    $alumnosByCurso = $this->filterAlumnosCursoByCiclo($ciclo);
    var_dump($alumnosByCurso);
    //SELECT c.nombre_curso, c.ciclo_curso FROM matricula_cursos as mc JOIN cursos as c ON mc.codigo_curso = c.codigo_curso WHERE c.ciclo_curso=10
  }
}
