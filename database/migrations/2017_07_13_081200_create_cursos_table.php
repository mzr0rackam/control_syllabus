<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->string('codigo_curso',6)->primary();
            $table->string('nombre_curso',50);
            $table->integer('numero_curso');
            $table->integer('horas_teoria');
            $table->integer('horas_practica');
            $table->integer('horas_labo');
            $table->integer('creditos_curso');
            $table->integer('ciclo_curso');
            $table->char('tipo_curso',1);
            $table->string('estado_curso',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
