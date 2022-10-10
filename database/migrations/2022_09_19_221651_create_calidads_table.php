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
        Schema::create('calidads', function (Blueprint $table) {
            $table->id();
            $table->string('turbidez');
            $table->string('ph');
            $table->string('color');
            $table->string('temperatura');
            $table->string('fecha');
            $table->string('hora');
            
            $table->timestamps();

          
            $table->unsignedBigInteger('id_agua');
    
    
            $table->foreign("id_agua")
                ->references("id")
                ->on("aguas")
                ->onDelete("cascade")
                ->onUpdate("cascade");






        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calidads');
    }
};
