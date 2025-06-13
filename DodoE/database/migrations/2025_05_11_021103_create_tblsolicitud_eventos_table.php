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
        Schema::create('tblsolicitud_eventos', function (Blueprint $table) {
            $table->id();
            $table->integer('fk_usuario');
            $table->foreign('fk_usuario')->references('id')->on('tblusuarios');
            $table->string('tipo_evento');
            $table->string('descripcion_deseos');
            $table->integer('cantiadad_personas');
            $table->date('fecha_deseada');
            $table->time('hora_deseada');
            $table->string('lugar_evento');
            $table->string('servicios_requeridos');
            $table->decimal('presupuesto', 10, 2);
            $table->string('estado_solicitud');
            $table->date('fecha_solicitud');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblsolicitud_eventos');
    }
};
