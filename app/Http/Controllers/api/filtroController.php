<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Productos;
use Illuminate\Http\Request;

class filtroController extends Controller
{
    //
    public function FilterProductsByCategory($id){
        $Productos = Productos::where('ID_CATEGORIA', $id)->get();

        if ($Productos->count() === 0) {
            return response()->json([
                'message' => 'No hay productos en esta categoria',
                'status' => 404
            ], 404);
        }

        $Data = [
            'Productos' => $Productos,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }
}
