<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBmaitreOuvrages2021Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bmaitre_ouvrages_2021', function (Blueprint $table) {
            $table->bigInteger('code', true);
            $table->string('adr')->nullable();
            $table->string('tel')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->unique('bmaitre_ouvrages_email_unique');
            $table->string('nom')->nullable();
            $table->string('SiteWeb')->nullable();
            $table->bigInteger('Bwilaya_code')->nullable();
            $table->bigInteger('ccom')->nullable();
            $table->string('CategorieTier')->nullable();
            $table->string('Abrevation')->nullable();
            $table->string('FamilleMouvrage')->nullable();
            $table->dateTime('DateModif')->nullable();
            $table->dateTime('DateArrivSrv')->nullable();
            $table->string('MotDePasse')->nullable();
            $table->string('ValidUser')->nullable();
            $table->string('CompteComptable')->nullable();
            $table->string('Nom_DR')->nullable();
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
        Schema::dropIfExists('bmaitre_ouvrages_2021');
    }
}
