<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('fone');
            $table->string('DtNascimento');
            $table->string('TipoProcesso');
            $table->string('LocalPasta');
            $table->string('StatusProcesso');
            $table->string('email');
            $table->string('NProc');
            $table->string('Comarca');
            $table->string('Vara');
            $table->string('Autor_reu');
            $table->string('cpf');
            $table->string('filiacao');
            $table->string('PastaVirtual');
            $table->text('Qualificacao');
            $table->text('Qualific_Contraria');
            $table->text('Andamento');
            $table->string('finalizado');
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
        Schema::drop('clientes');
    }
}
