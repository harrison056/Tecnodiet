<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRefeicaoAlimento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_refeicao_alimento', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->integer('refeicao_id')->unsigned();
            $table->integer('alimento_id')->unsigned();

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
        Schema::dropIfExists('table_refeicao_alimento');
    }
}
