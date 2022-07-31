<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBBcommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_bcommandes', function (Blueprint $table) {
            $table->integer('code', true);
            $table->integer('client_id');
            $table->string('intitule_proj')->nullable();
            $table->string('CodeWilaya')->nullable();
            $table->string('CodeCommune')->nullable();
            $table->string('adress_proj')->nullable();
            $table->string('bureau_etud')->nullable();
            $table->string('maitre_oeuv')->nullable();
            $table->string('maitre_oeuvTél')->nullable();
            $table->string('maitre_oeuvFax')->nullable();
            $table->string('maitre_oeuvAdresse')->nullable();
            $table->string('maitre_oeuvEmail')->nullable();
            $table->string('bureau_etudTél')->nullable();
            $table->string('bureau_etudFax')->nullable();
            $table->string('SurfaceConstruitM2')->nullable();
            $table->string('DateDebuttravaux', 50)->nullable();
            $table->string('DateDélaisTravaux', 50)->nullable();
            $table->boolean('AvantProjet')->default(false);
            $table->boolean('Projetdexécution')->default(false);
            $table->boolean('Esquisse')->default(false);
            $table->string('IngControlleSite')->nullable();
            $table->string('IngNumeroagrement')->nullable();
            $table->string('laboratoire')->nullable();
            $table->string('laboratoireTél')->nullable();
            $table->string('laboratoireFax')->nullable();
            $table->string('laboratoireAdresse')->nullable();
            $table->string('laboratoireEmail')->nullable();
            $table->timestamps();
            $table->string('MaitreOuvrage')->nullable();
            $table->string('MaitreOuvrageAdr')->nullable();
            $table->string('MaitreOuvrageRS')->nullable();
            $table->string('MaitreOuvrageNif')->nullable();
            $table->string('MaitreOuvrageTel')->nullable();
            $table->string('MaitreOuvrageFax')->nullable();
            $table->string('MaitreOuvrageEmail')->nullable();
            $table->string('bureau_etudAdr')->nullable();
            $table->string('bureau_etudEmail')->nullable();
            $table->string('docSig')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('b_bcommandes');
    }
}
