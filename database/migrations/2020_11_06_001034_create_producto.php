<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducto extends Migration
{
    
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_compra')->default(0);
            $table->unsignedBigInteger('cproducto_id')->default(0);
            $table->string('nombre',100)->nullable();
            $table->string('descripcion',100)->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->decimal('precio',13,2)->default(0)->nullable();
            $table->boolean('venta')->nullable();
            $table->timestamps();
            
            //$table->foreign('cproducto_id')->references('id')->on('cproducto');
        });
    }


    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
