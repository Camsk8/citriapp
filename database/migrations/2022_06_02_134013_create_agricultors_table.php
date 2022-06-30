<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgricultorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agricultors', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',40);
            $table->string('apellidos',40);
            $table->string('cedula',40);
            $table->string('email');
            $table->integer('telefono')->length(10);;
            $table->string('password',12,2);
            $table->string('tipo_rol');
            $table->string('certificado_agricultor');
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
        Schema::dropIfExists('agricultors');
    }
}
