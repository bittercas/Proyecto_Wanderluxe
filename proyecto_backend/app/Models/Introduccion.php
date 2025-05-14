<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Introduccion extends Model
{
    protected $table = 'introduccion';
    
    protected $fillable = ['titulo', 'descripcion', 'imagen'];
}
