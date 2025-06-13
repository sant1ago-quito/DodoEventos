<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ModelUsuarios extends Authenticatable
{
    use Notifiable;

    protected $table = 'tblusuarios';

    protected $fillable = [
        'nombre',
        'email',
        'contraseña',
        'rol',
    ];

    protected $hidden = [
        'contraseña',
        'remember_token',
    ];

    // Laravel espera el campo 'password', así que sobrescribimos este método
    public function getAuthPassword()
    {
        return $this->contraseña;
    }

    public function Eventos()
    {
        return $this->hasMany(ModelEventos::class);
    }
}