<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoritos extends Model
{
    use HasFactory;

    protected $table = 'FAVORITOS';

    protected $fillable = [
        'ID_USUARIO',
        'ID_PRODUCTO'
    ];
}
