<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbContrato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_cli')->unsigned();
            $table->text('Descricao');
            $table->string('origem');
            $table->boolean('Encaminhado');
            $table->string('Encaminhado_para');
            $table->boolean('Finalizado');
            $table->string('Finalizado_como');
            $table->string('data_finalizado');
            $table->string('Valor_Total');
            $table->timestamps();

            $table->foreign('cod_cli')->references('id')->on('clientes');
         });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contratos');
    }
}
