<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastoEnergeticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gasto_energeticos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->double('tmb')->nullable();
            $table->double('get')->nullable();

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
        Schema::dropIfExists('gasto_energeticos');
    }
}
