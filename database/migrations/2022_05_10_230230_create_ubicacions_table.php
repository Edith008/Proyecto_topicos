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
        Schema::create('ubicacions', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->unsignedInteger('Evento_id');
            $table->string('Nombre')->unique();
            $table->string('Descripcion')->nullable();
            $table->string('Ciudad')->nullable();
            $table->string('Direccion')->nullable();
            $table->string('Capacidad')->nullable();
            $table->timestamps();

            $table->foreign('Evento_id')->references('id')->on('eventos')->onDelete("cascade"); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicacions');
    }
};
