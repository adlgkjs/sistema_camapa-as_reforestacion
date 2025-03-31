<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('campanas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha');
            $table->time('hora');
            $table->text('descripcion');
            $table->string('ubicacion');
            $table->string('telefono', 15);
            $table->string('correo');
            $table->string('img');
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });    
    }

    public function down(): void
    {
        Schema::dropIfExists('campanas');    
    }
};
