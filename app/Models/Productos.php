<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;


    protected $table = 'PRODUCTOS';

    protected $fillable = [
        'NOMBRE_PRODUCTO',
        'DESCRIPCION_PRODUCTO',
        'PRECIO',
        'STOCK',
        'ID_VENDEDOR'
    ];
}
