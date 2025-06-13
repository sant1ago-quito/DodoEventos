<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelSolicitudEventos extends Model
{
    protected $table = 'tblsolicitud_eventos';
    protected $fillable = [
        'fk_usuario',
        'tipo_evento',
        'descripcion_deseos',
        'cantiadad_personas',
        'fecha_deseada',
        'hora_deseada',
        'lugar_evento',
        'servicios_requeridos',
        'presupuesto',
        'estado_solicitud',
        'fecha_solicitud'
    ];

    public function SolicitudEventos()
    {
        return $this->belongsTo(ModelUsuarios::class);
    }
}