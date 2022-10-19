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
        Schema::create('consumos', function (Blueprint $table) {
            $table->id();
             $table->string('dosis');
            //$table->string('cloro');//valor calculado de dosis_cloro/caudalBT 
            $table->string('fecha');
            $table->string('hora');
            $table->string('bombas_porcentaje');

            $table->unsignedBigInteger('id_agua'); 
            
            $table->foreign("id_agua")
                ->references("id")
                ->on("aguas")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->unsignedBigInteger('id_quimico'); 
            
            $table->foreign("id_quimico")
                ->references("id")
                ->on("quimicos")
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
        Schema::dropIfExists('consumos');
    }
};
