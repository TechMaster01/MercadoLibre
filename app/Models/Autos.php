<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autos extends Model
{
    use HasFactory;

    protected $table = 'AUTOS';

    protected $fillable = [
        'TIPO_VEHICULO',
        'MARCA',
        'MODELO',
        'FECHA_PUBLICACION',
        'PRECIO',
        'FINANCIADO',
        'ANIO_VEHICULO',
        'KILOMETRAJE',
        'PREGUNTAS_CLIENTE',
        'CARACTERISTICAS',
        'DESCRIPCION',
        'INFORMACION_VENDEDOR'
    ];
}