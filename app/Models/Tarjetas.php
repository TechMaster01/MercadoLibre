<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjetas extends Model
{
    use HasFactory;

    protected $table = 'TARJETAS';

    protected $fillable = [
        'ID_BILLETERA',
        'NUMERO_TARJETA',
        'NOMBRE_TITULAR',
        'FECHA_EXPIRACION',
        'CVV',
        'APODO'
    ];
}
