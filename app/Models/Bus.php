<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable=[
        'placa',
        'Marca',
        'Modelo',
        'Capacidad'
    ];
}
