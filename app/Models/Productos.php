<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;


    protected $table = 'PRODUCTOS';

    protected $fillable = [
        'MARCA',
        'NOMBRE_PRODUCTO',
        'DESCRIPCION_PRODUCTO',
        'CARACTERISTICAS_PRODUCTO',
        'PRECIO',
        'CANTIDAD_VENDIDOS',
        'PRECIO_CON_DESCUENTO',
        'PORCENTAJES_DESCUENTOS',
        'STOCK',
        'IMAGEN',
        'ID_VENDEDOR',
        'ID_CATEGORIA',
        'COLORES DISPONIBLES',
        'TIPO_ENVIO',
        'FECHA_ENTREGA',
        'COSTE_ENTREGA',
        'CALIFICACION',
        'IVA',
        'CARACTERISTICAS',
        'PRODUCTOS_TEMPORADA'
    ];
}