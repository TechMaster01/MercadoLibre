<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial_Notificaciones extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    protected $fillable = [
        'ID_NOTIFICACION',
        'ID_USUARIO',
        'TIPO_NOTIFICACION',
        'FECHA_ENVIO'
    ];
}
