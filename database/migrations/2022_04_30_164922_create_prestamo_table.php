<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo', function (Blueprint $table) {
            $table->id();
            $table->string('numero_comprobnate_prestamo',45);
            $table->date('fecha_emitida',45);
            $table->date('hora_emitida',45);
            $table->string('img_arma',45);

            $table->unsignedBigInteger('id_usuarios');//CREACION DE LA LLAVE FORANEA
            $table->foreign('id_usuarios')->references('id')->on('cuentausuarios')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('prestamo');
    }
}
