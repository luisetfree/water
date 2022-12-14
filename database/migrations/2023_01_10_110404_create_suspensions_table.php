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
        Schema::create('suspensions', function (Blueprint $table) {
            $table->id();
            $table->string('fecha');
            $table->string('hora_inicio');
            $table->string('hora_fin');
            $table->string('causa');
            $table->string('grupo');

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
        Schema::dropIfExists('suspensions');
    }
};
