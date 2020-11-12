<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('asunto')->nullable();
            $table->string('mensaje')->nullable();     
           $table->string('email')->unique('');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('status');
            $table->rememberToken();
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
        Schema::dropIfExists('contactos');
    }
}
