<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGChangementEtatProjetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GChangementEtatProjet', function (Blueprint $table) {
            $table->string('Code_Affaire', 13);
            $table->char('Code_site', 20);
            $table->string('EtatProjet', 50);
            $table->dateTime('DateChangementEtatProjet');
            $table->string('PieceJustifArret', 50)->nullable();
            $table->char('NumPieceJustifArret', 50)->nullable();
            $table->dateTime('DateFinEtat')->nullable();
            $table->string('PieceJustifReprise', 50)->nullable();
            $table->char('NumPieceJustifReprise', 50)->nullable();
            $table->text('ObsEtatProjet')->nullable();
            $table->dateTime('DateModif')->nullable();

            $table->primary(['Code_Affaire', 'Code_site', 'EtatProjet', 'DateChangementEtatProjet']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GChangementEtatProjet');
    }
}
