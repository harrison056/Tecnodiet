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
            
            $table->double('altura')->nullable();
            $table->double('peso')->nullable();
            $table->double('bracoDirRelaxado')->nullable();
            $table->double('bracoEsqRelaxado')->nullable();
            $table->double('bracoDirContraido')->nullable();
            $table->double('bracoEsqContraido')->nullable();
            $table->double('antebracoDir')->nullable();
            $table->double('antebracoEsq')->nullable();
            $table->double('punhoDir')->nullable();
            $table->double('punhoEsq')->nullable();
            $table->double('pescoco')->nullable();
            $table->double('ombro')->nullable();
            $table->double('peitoral')->nullable();
            $table->double('cintura')->nullable();
            $table->double('abdomen')->nullable();
            $table->double('quadril')->nullable();
            $table->double('panturrilhaDir')->nullable();
            $table->double('panturrilhaEsq')->nullable();
            $table->double('coxaDir')->nullable();
            $table->double('coxaEsq')->nullable();
            $table->double('punho')->nullable();
            $table->double('femur')->nullable();

            $table->integer('paciente_id')->unsigned();
            
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
