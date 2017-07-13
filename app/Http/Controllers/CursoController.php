<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso as Curso;

class CursoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $cursos = Curso::all();
    return view('curso.index',compact('cursos'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('curso.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $curso = Curso::create([
      'codigo_curso'    => $request->get('codigo_curso'),
      'nombre_curso'    => $request->get('nombre_curso'),
      'numero_curso'    => $request->get('numero_curso'),
      'horas_teoria'    => $request->get('horas_teoria'),
      'horas_practica'  => $request->get('horas_practica'),
      'horas_labo'      => $request->get('horas_labo'),
      'creditos_curso'  => $request->get('creditos_curso'),
      'ciclo_curso'     => $request->get('ciclo_curso'),
      'tipo_curso'      => $request->get('tipo_curso'),
      'estado_curso'    => $request->get('estado_curso')
    ]);

    return redirect('cursos');
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
}
