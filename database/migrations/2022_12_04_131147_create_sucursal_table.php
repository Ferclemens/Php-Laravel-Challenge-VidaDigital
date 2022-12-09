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
        Schema::create('sucursal', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //Foreign Key empresa
            $table->unsignedBigInteger('id_empresa')->nullable();
            $table->foreign('id_empresa')
                ->references('id')->on('empresa')
                ->onDelete('set null');
            $table->string('nombre', 120);
            $table->string('direccion');
            $table->string('email',120)->nullable();
            $table->bigInteger('telefono')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursal');
    }
};
