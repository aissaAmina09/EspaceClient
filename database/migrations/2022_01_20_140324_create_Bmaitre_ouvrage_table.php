<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBmaitreOuvrageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bmaitre_ouvrage', function (Blueprint $table) {
            $table->string('code', 7)->primary();
            $table->string('nom', 200)->nullable();
            $table->string('adr', 200)->nullable();
            $table->string('tel', 200)->nullable();
            $table->string('fax', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('SiteWeb', 200)->nullable();
            $table->string('Wilaya', 2)->nullable();
            $table->string('Commune', 5)->nullable();
            $table->string('CategorieTier', 3)->nullable();
            $table->string('Abrevation', 200)->nullable();
            $table->string('FamilleMouvrage', 200)->nullable();
            $table->dateTime('DateModif')->nullable();
            $table->dateTime('DateArrivSrv')->nullable();
            $table->string('MotDePasse', 200)->nullable();
            $table->string('ValidUser', 2)->nullable();
            $table->string('CompteComptable', 20)->nullable();
            $table->string('Nom_DR', 4)->nullable();
            $table->string('TutelleTiers', 100)->nullable();
            $table->string('GroupeTiers', 100)->nullable();
            $table->string('Secteur', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Bmaitre_ouvrage');
    }
}
