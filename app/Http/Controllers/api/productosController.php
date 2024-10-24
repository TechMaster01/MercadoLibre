<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Support\Facades\Validator;

class productosController extends Controller
{
    //
    public function index(){

        $productos = Productos::all();

        if($productos->isEmpty()){
            return response()->json(['message' => 'No hay productos en el registro'], 404);
        }

        return response()->json($productos, 200);
    }

    public function store(Request $request){
        $Validator = Validator::make($request->all(), [
            'NOMBRE_PRODUCTO' => 'required|max:255',
            'DESCRIPCION_PRODUCTO' => 'required',
            'PRECIO' => 'required',
            'STOCK' => 'required',
            'ID_VENDEDOR' => 'required'
        ]);

        if($Validator->fails()){
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }

        $productos = Productos::create([
            'NOMBRE_PRODUCTO' => $request->NOMBRE_PRODUCTO,
            'DESCRIPCION_PRODUCTO' => $request->DESCRIPCION_PRODUCTO,
            'PRECIO' => $request->PRECIO,
            'STOCK' => $request->STOCK,
            'ID_VENDEDOR' => $request->ID_VENDEDOR
        ]);

        if(!$productos){
            $Data = [
                'message' => 'Error al crear el producto',
                'status' => 500
            ];

            return response()->json($Data,500);
        }

        $Data = [
            'producto' => $productos,
            'status' => 201
        ];

        return response()->json($Data, 201);
    }

    public function show($id){
        $productos = Productos::find($id);


        if(!$productos){
            $Data = [
                'message' => 'Porducto no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $Data = [
            'producto' => $productos,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function destroy($id){
        $productos = Productos::find($id);

        if(!$productos){
            $Data = [
                'message' => 'Producto no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $productos->delete();

        $Data = [
            'message' => 'Producto eliminado',
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function update(Request $request, $id){
        $productos = Productos::find($id);

        if(!$productos){
            $Data = [
                'message' => 'Producto no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $Validator = Validator::make($request->all(), [
            'NOMBRE_PRODUCTO' => 'required|max:255',
            'DESCRIPCION_PRODUCTO' => 'required',
            'PRECIO' => 'required',
            'STOCK' => 'required',
            'ID_VENDEDOR' => 'required'
        ]);

        if($Validator->fails()){
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }

        $productos->NOMBRE_PRODUCTO = $request->NOMBRE_PRODUCTO;
        $productos->DESCRIPCION_PRODUCTO = $request->DESCRIPCION_PRODUCTO;
        $productos->PRECIO = $request->PRECIO;
        $productos->STOCK = $request->STOCK;
        $productos->ID_VENDEDOR = $request->ID_VENDEDOR;

        $productos->save();

        $Data = [
            'message' => 'Producto actualizado',
            'cliente' => $productos,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }
}
