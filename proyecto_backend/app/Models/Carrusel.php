<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrusel extends Model
{
    protected $table = 'carrusel';
    
    protected $fillable = ['titulo', 'parrafo', 'imagen'];
}
