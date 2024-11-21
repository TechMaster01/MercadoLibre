<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;

    protected $table = 'COMENTARIOS';

    protected $fillable = [
        'ID_USUARIO',
        'ID_PRODUCTO',
        'COMENTARIO'
    ];
}
