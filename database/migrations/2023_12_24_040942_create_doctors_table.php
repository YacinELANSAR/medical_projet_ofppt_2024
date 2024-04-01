<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('genre');
            $table->string('profileimage');
            $table->string('phonenumber');
            $table->string('description');
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('departement_id')->constrained('departements')->onDelete('restrict');
            $table->foreignId('ville_id')->constrained('villes')->onDelete('restrict');
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
        Schema::dropIfExists('doctors');
    }
};
