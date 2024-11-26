<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentariosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('COMENTARIOS')->insert([
            [
                'ID_USUARIO' => 1,
                'ID_PRODUCTO' => 1,
                'COMENTARIO' => 'El producto llegó rápido y cumple con las especificaciones. Muy satisfecho.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 2,
                'ID_PRODUCTO' => 1,
                'COMENTARIO' => 'Excelente calidad, aunque esperaba un poco más por el precio.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 3,
                'ID_PRODUCTO' => 2,
                'COMENTARIO' => 'Buena compra. Funciona perfecto y el diseño es muy bonito.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 4,
                'ID_PRODUCTO' => 2,
                'COMENTARIO' => 'Me llegó con un rayón, pero el vendedor me ofreció un cambio.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 5,
                'ID_PRODUCTO' => 3,
                'COMENTARIO' => 'El empaque estaba en mal estado, pero el producto está bien.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 6,
                'ID_PRODUCTO' => 3,
                'COMENTARIO' => 'Buena calidad. Lo recomiendo ampliamente.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 7,
                'ID_PRODUCTO' => 4,
                'COMENTARIO' => 'Es justo lo que necesitaba, buena relación calidad-precio.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 8,
                'ID_PRODUCTO' => 4,
                'COMENTARIO' => 'El color no era como esperaba, pero funciona bien.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 9,
                'ID_PRODUCTO' => 5,
                'COMENTARIO' => 'Lo uso todos los días, es un excelente producto.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 10,
                'ID_PRODUCTO' => 5,
                'COMENTARIO' => 'El precio es alto para lo que ofrece.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 11,
                'ID_PRODUCTO' => 6,
                'COMENTARIO' => 'Me encantó, es exactamente como se describe.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 12,
                'ID_PRODUCTO' => 6,
                'COMENTARIO' => 'Tuve problemas con la entrega, pero el soporte fue bueno.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 13,
                'ID_PRODUCTO' => 7,
                'COMENTARIO' => 'El producto cumple bien, aunque el envío tardó más de lo esperado.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 14,
                'ID_PRODUCTO' => 7,
                'COMENTARIO' => 'No estoy completamente satisfecho con la calidad.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 15,
                'ID_PRODUCTO' => 8,
                'COMENTARIO' => 'La experiencia de compra fue excelente. Lo recomiendo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 16,
                'ID_PRODUCTO' => 8,
                'COMENTARIO' => 'El tamaño no era lo que esperaba, pero está bien.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 17,
                'ID_PRODUCTO' => 9,
                'COMENTARIO' => 'Buen producto, aunque podría mejorar el empaque.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 18,
                'ID_PRODUCTO' => 9,
                'COMENTARIO' => 'Lo uso hace días y no he tenido problemas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 19,
                'ID_PRODUCTO' => 10,
                'COMENTARIO' => 'Recibí exactamente lo que compré, todo perfecto.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID_USUARIO' => 20,
                'ID_PRODUCTO' => 10,
                'COMENTARIO' => 'Buena calidad, pero el precio podría ser más competitivo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
