<?php

namespace App\Http\Traits;

use DB;

trait QueryTrait
{
  public function filterAlumnosCursoByCiclo($ciclo)
  {
    $creditos_curso = DB::select('SELECT nombre_curso, creditos_curso FROM cursos');
    return $creditos_curso;
  }
}
