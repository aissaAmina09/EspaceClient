<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBcommunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bcommunes', function (Blueprint $table) {
            $table->string('codewilaya', 2);
            $table->string('ccom', 5);
            $table->string('commune', 200)->nullable();
            $table->string('Zonesismique', 20)->nullable();
            $table->decimal('TemperatureLongueur', 18)->nullable();
            $table->decimal('DistanceChefLieu', 18)->nullable();
            $table->string('RECETTE', 100)->nullable();
            $table->dateTime('DateModif')->nullable();
            $table->string('zone_neige', 20)->nullable();
            $table->string('zone_vent', 20)->nullable();

            $table->primary(['ccom', 'codewilaya']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Bcommunes');
    }
}
