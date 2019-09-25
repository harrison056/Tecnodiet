<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntropometriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void$table->string('');
     $table->string('');
     $table->string('');
     $table->string('');
     */
    public function up()
    {
        Schema::create('antropometrias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('altura');
            $table->string('peso'); 
            $table->string('dtNascimento');
            $table->string('bracoDirRelaxado');
            $table->string('bracoEsqRelaxado');
            $table->string('bracoDirContraido');
            $table->string('bracoEsqContraido');
            $table->string('antebracoDir');
            $table->string('antebracoEsq');
            $table->string('punhoDir');
            $table->string('punhoEsq');
            $table->string('pescoco');
            $table->string('ombro');
            $table->string('peitoral');
            $table->string('cintura');
            $table->string('abdomen');
            $table->string('quadril');
            $table->string('panturrilhaDir');
            $table->string('panturrilhaEsq');
            $table->string('coxaDir');
            $table->string('coxaEsq');

            $table->integer('paciente_id')->unsigned()->nullable();
            $table->foreign('paciente_id')->references('id')->on('pacientes');

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
        Schema::dropIfExists('antropometrias');
    }
}
