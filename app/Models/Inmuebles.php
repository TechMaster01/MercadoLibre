<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmuebles extends Model
{
    use HasFactory;

    protected $table = 'COMENTARIOS';

    protected $fillable = [
        'TIPO_INMUEBLES',
        'TITULO',
        'FECHA_PUBLICACION',
        'AUTOR_PUBLICACION',
        'PRECIO',
        'METROS_INMUEBLE',
        'NUMERO_RECAMARAS',
        'NUMERO_BANOS',
        'UBICACION',
        'CARACTERISTICAS_INMUEBLE',
        'INFORMACION_ZONA',
        'DESCRIPCION',
        'INFORMACION_TIENDA'
    ];
}