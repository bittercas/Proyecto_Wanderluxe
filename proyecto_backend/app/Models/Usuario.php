<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'apellido', 'correo', 'contrasenya'];
    protected $hidden = ['contrasenya'];

    public function traerContrasenya()
    {
        return $this->contrasenya;
    }

    public static function findForPassport($value)
    {
        return self::where('correo', $value)->first();
    }
}
