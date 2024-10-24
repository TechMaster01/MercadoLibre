<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class categoriasController extends Controller
{
    //
    public function index(){

        $categorias = Categorias::all();

        if($categorias->isEmpty()){
            return response()->json(['message' => 'No hay categorias en el registro'], 404);
        }

        return response()->json($categorias, 200);
        //return 'Obteniendo lista de clientes desde el controller';
    }

    public function store(Request $request){
        $Validator = Validator::make($request->all(), [
            'NOMBRE_CATEGORIA' => 'required'
        ]);

        if($Validator->fails()){
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }

        $categorias = Categorias::create([
            'NOMBRE_CATEGORIA' => $request->NOMBRE_CATEGORIA
        ]);

        if(!$categorias){
            $Data = [
                'message' => 'Error al crear la categoria',
                'status' => 500
            ];

            return response()->json($Data,500);
        }

        $Data = [
            'categorias' => $categorias,
            'status' => 201
        ];

        return response()->json($Data, 201);
    }

    public function show($id){
        $categorias = Categorias::find($id);


        if(!$categorias){
            $Data = [
                'message' => 'Categoria no encontrada',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $Data = [
            'categoria' => $categorias,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function destroy($id){
        $categorias = Categorias::find($id);

        if(!$categorias){
            $Data = [
                'message' => 'Categoria no encontrada',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $categorias->delete();

        $Data = [
            'message' => 'Categoria eliminada',
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function update(Request $request, $id){
        $categorias = Categorias::find($id);

        if(!$categorias){
            $Data = [
                'message' => 'Categoria no encontrada',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $Validator = Validator::make($request->all(), [
            'NOMBRE_CATEGORIA' => 'required'
        ]);

        if($Validator->fails()){
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }

        $categorias->NOMBRE_CATEGORIA = $request->NOMBRE_CATEGORIA;

        $categorias->save();

        $Data = [
            'message' => 'Categoria actualizada',
            'categoria' => $categorias,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }
}
