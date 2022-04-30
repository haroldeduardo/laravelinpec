<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario', function (Blueprint $table) {
            $table->id();
            $table->string ('numerodocumento',100);
            $table->string ('nombresFuncionario',100)->nullable();
            $table->string ('apellidosFuncionario',100)->nullable();
            $table->string ('generoFuncionario',100)->nullable();
            $table->string ('direccionFuncionario',100)->nullable();
            $table->string ('telefonoFuncionario',100)->nullable();
            $table->unsignedBigInteger('id_rol');//CREACION DE LA LLAVE FORANEA
            $table->foreign('id_rol')->references('id')->on('rol')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('funcionario');
    }
}
/*ggggggggg*/