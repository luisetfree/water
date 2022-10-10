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
        Schema::create('equipos', function (Blueprint $table) {
            /*Modificar el id para que no se autoincremente, esto ayudara a asignar el id en orden, desde BT hasta EB3 y el id correspondera al numero de equipos que existe en todo el sistema de bombeo*/
            $table->id();
            $table->string('nombre');
            $table->string('tag');
            $table->string('tipo');
            
          
            $table->unsignedBigInteger('id_estacion');
    
    
            $table->foreign("id_estacion")
                ->references("id")
                ->on("estacions")
                ->onDelete("cascade")
                ->onUpdate("cascade");





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
        Schema::dropIfExists('machines');
    }
};
