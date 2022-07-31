<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBagencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bagences', function (Blueprint $table) {
            $table->string('code_ag', 3)->primary();
            $table->string('nom_ag', 200)->nullable();
            $table->string('Adresse', 200)->nullable();
            $table->string('Tel', 200)->nullable();
            $table->string('Fax', 200)->nullable();
            $table->string('Telegraphe', 200)->nullable();
            $table->string('Email', 200)->nullable();
            $table->string('RC', 20)->nullable();
            $table->string('IA', 20)->nullable();
            $table->string('NIF', 20)->nullable();
            $table->string('Compte_bancaire', 100)->nullable();
            $table->string('NSS', 100)->nullable();
            $table->string('abreger', 10)->nullable();
            $table->boolean('Sommeil')->nullable();
            $table->integer('NumeroRef')->nullable();
            $table->string('LieuSortant', 250)->nullable();
            $table->dateTime('DateCourrier')->nullable();
            $table->integer('NumeroSequentiel')->nullable();
            $table->boolean('VisibleGCPRO')->nullable()->default(true);
            $table->boolean('GuichetUnique')->nullable();
            $table->string('WilayaAg', 200)->nullable();
            $table->string('CommuneAg', 200)->nullable();
            $table->dateTime('DateModifConsolid')->nullable();
            $table->dateTime('DateModif')->nullable();
            $table->string('Nom_DR', 4)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Bagences');
    }
}
