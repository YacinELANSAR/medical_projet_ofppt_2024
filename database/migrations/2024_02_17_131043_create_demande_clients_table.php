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
        Schema::create('demande_clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->date('jour');
            $table->string('heure');
            $table->string('phone');
            $table->string('status')->default('programmé');
            $table->string('address');
            $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade'); 
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
        Schema::dropIfExists('demande_clients');
    }
};
