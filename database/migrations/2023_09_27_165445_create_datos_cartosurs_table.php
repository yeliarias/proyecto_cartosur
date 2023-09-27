<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosCartosursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_cartosurs', function (Blueprint $table) {
            $table->id();
            $table->string('nam');
            $table->string('fna');
            $table->integer('dm_cph');
            $table->string('nor_mag');
            $table->string('nor_cua');
            $table->string('dec_mag');
            $table->string('cen_car');
            $table->string('var_anual');
            $table->string('date_toma');
            $table->string('date_edic');
            $table->string('sag');
            $table->string('txt');
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
        Schema::dropIfExists('datos_cartosurs');
    }
}
