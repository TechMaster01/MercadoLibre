<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Favoritos;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Validator;

class favoritosController extends Controller
{
    //
    public function index(){
        throw new NotFoundHttpException();
    }

    public function show($id){
        $favoritos = Favoritos::where('ID_USUARIO', $id)->get();

        if($favoritos->count() === 0){
            return response()->json([
                'message' => 'La lista de favoritos esta vacia',
                'status' => 404
            ], 404);
        }

        $Data = [
            'Lista:' => $favoritos,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function store(Request $request){
        $Validator = Validator::make($request->all(), [
            'ID_USUARIO' => 'required',
            'ID_PRODUCTO' => 'required'
        ]);

        if($Validator->fails()){
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }

        $existeFavorito = Favoritos::where('ID_USUARIO', $request->ID_USUARIO)->where('ID_PRODUCTO', $request->ID_PRODUCTO)->exists();

        if ($existeFavorito) {
            $Data = [
                'message' => 'El producto ya está en los favoritos del usuario',
                'status' => 409
            ];

            return response()->json($Data, 409); // Código 409 para conflictos de datos
        }

        $favorito = Favoritos::create([
            'ID_USUARIO' => $request->ID_USUARIO,
            'ID_PRODUCTO' => $request->ID_PRODUCTO
        ]);

        if(!$favorito){
            $Data = [
                'message' => 'Error al registrar el producto',
                'status' => 500
            ];

            return response()->json($Data,500);
        }

        $Data = [
            'producto' => $favorito,
            'status' => 201
        ];

        return response()->json($Data, 201);
    }

    public function destroy($id){
        $favorito = Favoritos::where('ID_PRODUCTO', $id)->first();

        if (!$favorito) {
            $data = [
                'message' => 'El producto no está en la lista',
                'status' => 404
            ];
    
            return response()->json($data, 404);
        }
    
        // Elimina el favorito
        $favorito->delete();
    
        $data = [
            'message' => 'Favorito eliminado',
            'status' => 200
        ];
    
        return response()->json($data, 200);    
    }
}
