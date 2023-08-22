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
        Schema::create('Alunos', function (Blueprint $table) {
            $table->id();
            $table->string('Nome');
            $table->string('dtNasc');
            $table->string('CPF');
            $table->string('sexo');
            $table->string('NomeResponsavel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Alunos');
    }
};
