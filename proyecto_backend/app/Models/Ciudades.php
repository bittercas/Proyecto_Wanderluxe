<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    protected $table = 'ciudades';
    
    protected $fillable = ['titulo', 'descripcion', 'imagen'];
}
