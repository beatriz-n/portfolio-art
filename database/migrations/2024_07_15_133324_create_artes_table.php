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
        Schema::create('artes', function (Blueprint $table) {
            $table->id('idArte');
            $table->string('tituloArte');
            $table->decimal('valorArte');
            $table->integer('statusArte');
            $table->integer('vernizArte');
            $table->integer('molduraArte');
            $table->string('imagemArte');
            $table->dateTime('envioArte');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artes');
    }
};
