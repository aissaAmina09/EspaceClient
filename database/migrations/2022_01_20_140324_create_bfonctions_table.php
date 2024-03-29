<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBfonctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bfonctions', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('CodeFnt')->nullable();
            $table->string('LibelleFct')->nullable();
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
        Schema::dropIfExists('bfonctions');
    }
}
