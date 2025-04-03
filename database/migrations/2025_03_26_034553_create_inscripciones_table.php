<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_campana')->constrained('campanas')->onDelete('cascade');
            $table->string('nombre');
            $table->string('edad');
            $table->string('telefono');
            $table->string('correo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inscripciones');
    }
};
