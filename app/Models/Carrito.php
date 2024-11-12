<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $table = 'CARRITO_PRODUCTOS';

    protected $fillable = [
        'ID_CARRITO',
        'ID_PRODUCTO',
        'CANTIDAD'
    ];
}
