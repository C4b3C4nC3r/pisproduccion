<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCultivoplagaproductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultivoplagaproducto', function (Blueprint $table) {
            $table->id();
            //cultivo_id, plaga_id, producto_id, descripcion...
            $table->unsignedBigInteger('cultivo_id');
            $table->unsignedBigInteger('plaga_id');
            $table->unsignedBigInteger('productotecnico_id');
            $table->foreign('plaga_id')->references('id')->on('plagas')->onDelete('cascade');
            $table->foreign('cultivo_id')->references('id')->on('cultivos')->onDelete('cascade');
            $table->foreign('productotecnico_id')->references('id')->on('productotecnico')->onDelete('cascade');
            $table->string('descripcion');
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
        Schema::dropIfExists('cultivoplagaproducto');
    }
}
