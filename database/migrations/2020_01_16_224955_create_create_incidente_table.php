<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateIncidenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descricao');
            $table->integer('id_criticidade')->unsigned();
            $table->integer('id_tipo')->unsigned();;
            $table->integer('status');
            $table->timestamps();
            $table->foreign('id_criticidade')->references('id')->on('criticidade');
            $table->foreign('id_tipo')->references('id')->on('tipo_incidente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidente');

    }
}
