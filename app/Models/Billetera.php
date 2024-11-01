<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billetera extends Model
{
    use HasFactory;

    protected $table = 'BILLETERA_DIGITAL';

    protected $fillable = [
        'ID_USUARIO',
        'SALDO',
        'TIPO_MODEDA'
    ];
}
