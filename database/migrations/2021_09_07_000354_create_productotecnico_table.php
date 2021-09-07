<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductotecnicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productotecnico', function (Blueprint $table) {
            $table->id();
            //name, name_tech, mode_action, composer, tiempo, lmr_ppm, categoria_id, fabricante_id, 
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('fabricante_id');
            $table->foreign('fabricante_id')->references('id')->on('fabricantes')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->string('name');
            $table->string('nametech');
            $table->string('mode_action');
            $table->string('composicion');
            $table->string('tiempoaplicacion');
            $table->string('lmr_ppm');            
            $table->softDeletes();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productotecnico');
    }
}
