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
        Schema::create('artes_materiais', function (Blueprint $table) {
            $table->id('idArteMaterial');            
            $table->foreignId('idArte')->references('idArte')->on('artes');
            $table->foreignId('idMaterial')->references('idMaterial')->on('materiais');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artes_materiais');
    }
};
