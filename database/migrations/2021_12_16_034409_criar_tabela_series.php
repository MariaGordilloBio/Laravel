<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaSeries extends Migration
{
    /**
     * Roda o comando de migração
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
    /** Define o que roda na função */
            $table->increments('id');
    /** Define id para poder excluir dado */
            $table->string('nome');
        });

    }

    /**
     * Reverte o comando de migração(exclui)
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('series');
    /** Define o que remove a função */

    }
}
