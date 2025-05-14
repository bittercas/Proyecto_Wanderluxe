<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Continentes extends Model
{
    protected $table = 'continentes';
    
    protected $fillable = ['titulo', 'descripcion', 'imagen'];
}
