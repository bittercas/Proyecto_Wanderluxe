<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aventuras extends Model
{
    protected $table = 'aventuras';
    
    protected $fillable = ['titulo', 'descripcion', 'imagen'];
}
