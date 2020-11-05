<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apellidoPa')->nullable();
            $table->string('apellidoMa')->nullable();
            $table->string('direccion')->nullable();
            $table->bigInteger('telefono')->nullable();
            $table->date('fechaNaci')->nullable();
            $table->string('email')->unique('');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            //Schema::table('users', function (Blueprint $table){
            $table->unsignedBigInteger('roles_id')->default(0);
            //$table->foreign('roles_id')->references('id')->on('roles');
        //});
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
