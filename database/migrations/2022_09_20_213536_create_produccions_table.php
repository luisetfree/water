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
        Schema::create('produccions', function (Blueprint $table) {
            $table->id();
            $table->string('caudal');
            $table->string('fecha');
            $table->string('hora');
            $table->string('cloro_residual');
            $table->string('nivel_camara');
            $table->string('nivel_rio');
            $table->string('presion_linea');

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
        Schema::dropIfExists('produccions');
    }
};
