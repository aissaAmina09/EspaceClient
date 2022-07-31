<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGEtatProjetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GEtatProjet', function (Blueprint $table) {
            $table->string('codeEtatProjet', 20)->primary();
            $table->string('LibelleEtatProjet', 200)->nullable();
            $table->string('Trie', 2)->nullable();
            $table->dateTime('DateModif')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GEtatProjet');
    }
}
