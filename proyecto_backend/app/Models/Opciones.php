<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opciones extends Model
{
    protected $table = 'opciones';
    
    protected $fillable = ['titulo', 'descripcion', 'imagen'];
}
