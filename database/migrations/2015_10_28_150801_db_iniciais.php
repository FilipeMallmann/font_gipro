<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbIniciais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('iniciais', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Referencia');
            $table->string('Tipo');
            $table->string('Titulo');  
            $table->text('Corpo');
            $table->text('Pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('iniciais');
    }
}
