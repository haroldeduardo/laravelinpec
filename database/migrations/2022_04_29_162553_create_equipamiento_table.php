<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamiento', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion_equipamiento',45);
            $table->string('fecha_registro_equpamiento',45);
            $table->string('calibre_equipamiento',45);
            $table->string('serie_equipamiento',45);
            $table->unsignedBigInteger('id_modelo');//CREACION DE LA LLAVE FORANEA
            $table->foreign('id_modelo')->references('id')->on('modeloequipamiento')->onDelete('cascade')->onUpdate('cascade');


            //------
            $table->unsignedBigInteger('id_marca');//CREACION DE LA LLAVE FORANEA
            $table->foreign('id_marca')->references('id')->on('marca')->onDelete('cascade')->onUpdate('cascade');


            
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
        Schema::dropIfExists('equipamiento');
    }
}
