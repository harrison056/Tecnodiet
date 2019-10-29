<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnamneseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamnese', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('casoClinico')->nullable();

            $table->string('restricao')->nullable();
            $table->boolean('bebida')->nullable();
            $table->boolean('fumante')->nullable();
            $table->boolean('foraDeCasa')->nullable();
            $table->string('obsRestricao')->nullable();

            $table->boolean('sono')->nullable();
            $table->time('hrSono')->nullable();
            $table->string('obsSono')->nullable();
            $table->string('exercicio')->nullable();

            $table->string('patologias')->nullable();
            $table->string('medicamentos')->nullable();
            $table->string('exames')->nullable();
            $table->string('historicoFamiliar')->nullable();

            $table->string('apetite')->nullable();
            $table->string('mastigacao')->nullable();
            $table->string('intestinal')->nullable();

            $table->string('suplementos')->nullable();
            $table->string('alergias')->nullable();
            $table->string('intolerancias')->nullable();

            $table->string('obsGeral')->nullable();

            $table->integer('paciente_id')->unsigned();//chave estrangeira

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
        Schema::dropIfExists('anamnese');
    }
}
