<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->string('nombre')->nullable();            
            $table->string('apellidos')->nullable();
            $table->string('correo')->nullable();
            $table->string('pais')->nullable();
            $table->string('telefono')->nullable();
            $table->string('empresa')->nullable();
            $table->string('cargo')->nullable();
            $table->string('valid_dat_per')->nullable();
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
        Schema::drop('registros');
    }
}
