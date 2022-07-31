<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('role_id')->default(2);
            $table->string('Nom')->nullable();
            $table->string('Prenom')->nullable();
            $table->string('Qualite')->nullable();
            $table->string('Adresse')->nullable();
            $table->string('Raisonsocial')->nullable();
            $table->string('Telephone')->nullable();
            $table->string('Fax')->nullable();
            $table->string('token')->nullable();
            $table->string('email')->unique();
            $table->dateTime('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->char('commune', 10)->nullable();
            $table->char('wilaya', 10)->nullable();
            $table->char('type', 10)->nullable();
            $table->dateTime('DernierAccess')->nullable();
            $table->integer('MyNewColumn')->default(0);
            $table->integer('is_activated')->default(0);
            $table->string('image')->default('default.jpg');
            $table->string('Nif')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
