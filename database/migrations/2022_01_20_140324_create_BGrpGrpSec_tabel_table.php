<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBGrpGrpSecTabelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BGrpGrpSec_tabel', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('codeGrpSec')->nullable();
            $table->string('LibelleGrpSec')->nullable();
            $table->dateTime('DateModif')->nullable();
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
        Schema::dropIfExists('BGrpGrpSec_tabel');
    }
}