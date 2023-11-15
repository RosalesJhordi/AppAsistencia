<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = [
        'dia1',
        'entrada1',
        'salida1',
        'dia2',
        'entrada2',
        'salida2',
        'estado',
        'user_id'
    ];

    
}
