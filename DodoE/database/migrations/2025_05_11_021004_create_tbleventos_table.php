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
        Schema::create('tbleventos', function (Blueprint $table) {
             $table->id();
            $table->integer('fk_usuario');
            $table->foreign('fk_usuario')->references('id')->on('tblusuarios');
            $table->string('nombre_evento');
            $table->string('descripcion');
            $table->date('fecha_evento');
            $table->time('hora_evento');
            $table->string('ubicacion');
            $table->string('estado');
            $table->integer('asistentes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbleventos');
    }
};
