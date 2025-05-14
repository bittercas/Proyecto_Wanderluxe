<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Top2025 extends Model
{
    protected $table = 'top2025';
    
    protected $fillable = ['titulo', 'descripcion', 'imagen'];
}
