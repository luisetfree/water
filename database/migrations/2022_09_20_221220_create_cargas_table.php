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
        Schema::create('cargas', function (Blueprint $table) {
            $table->id();
            $table->string('cantidad');
            $table->string('concentracion_tk');
            $table->string('fecha');
            $table->string('hora');
            $table->string('grupo');//hace referencia al grupo de trabajo que se encuentra trabajando en la planta



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
        Schema::dropIfExists('cargas');
    }
};
