<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('client_id');
            $table->string('Raison_sociale')->nullable();
            $table->string('Ref_Bon_commande')->nullable();
            $table->string('intitule_proj')->nullable();
            $table->string('Intitule_projet')->nullable();
            $table->string('Message')->nullable();
            $table->dateTime('Date_de_reclamation')->nullable();
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
        Schema::dropIfExists('reclamations');
    }
}
