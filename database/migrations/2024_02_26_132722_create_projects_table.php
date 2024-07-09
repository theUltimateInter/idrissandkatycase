<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NumProjet');
            $table->string('name', 40);
            $table->string('ville', 40);
            $table->unsignedBigInteger('categorie_id'); // Clé étrangère vers la table categories
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('Année', 20);
            $table->text('Description');
            $table->unsignedBigInteger('maitreOuvrage'); // Clé étrangère vers la table maitre_ouvrages
            $table->foreign('maitreOuvrage')->references('id')->on('maitre_ouvrages')->onDelete('cascade');
            $table->string('architecte', 40); // Correction du nom de colonne
            $table->string('video'); // Correction de l'espace supplémentaire
            $table->string('observation', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
