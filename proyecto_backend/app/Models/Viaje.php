<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    protected $fillable = ['destino', 'inicio', 'fin', 'descripcion', 'presupuesto', 'id_usuario'];

    public function usuario()
    {
    return $this->belongsTo(User::class, 'id_usuario');
    }
}
