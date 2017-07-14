<?php

namespace App\Http\Traits;

use DB;

trait QueryTrait
{
  public function filterAlumnosCursoByCiclo($ciclo)
  {
    $creditos_curso = DB::table('cursos')->get();
    var_dump($creditos_curso);
  }
}
