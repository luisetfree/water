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
        Schema::create('nivel_tanques', function (Blueprint $table) {
            $table->id();


             $table->string('nivel');
            $table->string('cloro');
            $table->string('fecha');
            $table->string('hora');

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
        Schema::dropIfExists('nivel_tanques');
    }
};
