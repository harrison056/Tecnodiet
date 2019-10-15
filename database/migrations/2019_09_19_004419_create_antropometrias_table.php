<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntropometriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antropometrias', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->double('altura');
            $table->double('peso'); 
            $table->date('dtNascimento');
            $table->double('bracoDirRelaxado');
            $table->double('bracoEsqRelaxado');
            $table->double('bracoDirContraido');
            $table->double('bracoEsqContraido');
            $table->double('antebracoDir');
            $table->double('antebracoEsq'));
            $table->double('punhoDir');
            $table->double('punhoEsq');
            $table->double('pescoco');
            $table->double('ombro'));
            $table->double('peitoral');
            $table->double('cintura');
            $table->double('abdomen');
            $table->double('quadril');
            $table->double('panturrilhaDir');
            $table->double('panturrilhaEsq');
            $table->double('coxaDir');
            $table->double('coxaEsq');

            $table->integer('paciente_id')->unsigned();
            $table->foreingn('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');

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
