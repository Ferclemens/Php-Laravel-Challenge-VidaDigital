<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //Foreign Key sucursal
            $table->unsignedBigInteger('id_sucursal')->nullable();
            $table->foreign('id_sucursal')
                ->references('id')->on('sucursal')
                ->onDelete('set null');
            $table->string('nombre', 120);
            $table->string('apellido', 120);
            $table->bigInteger('dni');
            $table->string('direccion');
            $table->string('email',120)->nullable();
            $table->bigInteger('telefono')->nullable();
            $table->date('fecha_nacimiento');
            $table->date('fecha_ingreso');
            $table->string('cargo', 100);
            $table->bigInteger('sueldo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
};
