<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'codigo_curso',
      'nombre_curso',
      'numero_curso',
      'horas_teoria',
      'horas_practica',
      'horas_labo',
      'creditos_curso',
      'ciclo_curso',
      'tipo_curso',
      'estado_curso'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
  ];
}
