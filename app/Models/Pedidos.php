<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;


    protected $table = 'PEDIDOS';

    protected $fillable = [
        'ID_USUARIO',
        'FECHA_PEDIDO',
        'MONTO_TOTAL',
        'ESTADO_ENVIO'
    ];
}
