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

    public function store(Request $request) {
        $Validator = Validator::make($request->all(), [
            'MARCA' => 'required|max:255',
            'NOMBRE_PRODUCTO' => 'required|max:255',
            'DESCRIPCION_PRODUCTO' => 'required',
            'CARACTERISTICAS_PRODUCTO' => 'nullable',
            'PRECIO' => 'required|numeric',
            'CANTIDAD_VENDIDOS' => 'nullable|integer',
            'PRECIO_CON_DESCUENTO' => 'nullable|numeric',
            'PORCENTAJES_DESCUENTOS' => 'nullable|numeric|min:0|max:100',
            'STOCK' => 'required|integer',
            'IMAGEN' => 'nullable|string',
            'ID_VENDEDOR' => 'required|integer',
            'ID_CATEGORIA' => 'required|integer',
            'COLORES_DISPONIBLES' => 'nullable|string',
            'TIPO_ENVIO' => 'nullable|string'
        ]);
    
        if ($Validator->fails()) {
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];
    
            return response()->json($Data, 400);
        }
    
        $productos = Productos::create([
            'MARCA' => $request->MARCA,
            'NOMBRE_PRODUCTO' => $request->NOMBRE_PRODUCTO,
            'DESCRIPCION_PRODUCTO' => $request->DESCRIPCION_PRODUCTO,
            'CARACTERISTICAS_PRODUCTO' => $request->CARACTERISTICAS_PRODUCTO,
            'PRECIO' => $request->PRECIO,
            'CANTIDAD_VENDIDOS' => $request->CANTIDAD_VENDIDOS,
            'PRECIO_CON_DESCUENTO' => $request->PRECIO_CON_DESCUENTO,
            'PORCENTAJES_DESCUENTOS' => $request->PORCENTAJES_DESCUENTOS,
            'STOCK' => $request->STOCK,
            'IMAGEN' => $request->IMAGEN,
            'ID_VENDEDOR' => $request->ID_VENDEDOR,
            'ID_CATEGORIA' => $request->ID_CATEGORIA,
            'COLORES_DISPONIBLES' => $request->COLORES_DISPONIBLES,
            'TIPO_ENVIO' => $request->TIPO_ENVIO
        ]);
    
        if (!$productos) {
            $Data = [
                'message' => 'Error al crear el producto',
                'status' => 500
            ];
    
            return response()->json($Data, 500);
        }
    
        $Data = [
            'producto' => $productos,
            'status' => 201
        ];
    
        return response()->json($Data, 201);
    }    

    public function update(Request $request, $id) {
        $productos = Productos::find($id);
    
        if (!$productos) {
            $Data = [
                'message' => 'Producto no encontrado',
                'status' => 404
            ];
    
            return response()->json($Data, 404);
        }
    
        $Validator = Validator::make($request->all(), [
            'MARCA' => 'required|max:255',
            'NOMBRE_PRODUCTO' => 'required|max:255',
            'DESCRIPCION_PRODUCTO' => 'required',
            'CARACTERISTICAS_PRODUCTO' => 'nullable',
            'PRECIO' => 'required|numeric',
            'CANTIDAD_VENDIDOS' => 'nullable|integer',
            'PRECIO_CON_DESCUENTO' => 'nullable|numeric',
            'PORCENTAJES_DESCUENTOS' => 'nullable|numeric|min:0|max:100',
            'STOCK' => 'required|integer',
            'IMAGEN' => 'nullable|string',
            'ID_VENDEDOR' => 'required|integer',
            'ID_CATEGORIA' => 'required|integer',
            'COLORES_DISPONIBLES' => 'nullable|string',
            'TIPO_ENVIO' => 'nullable|string'
        ]);
    
        if ($Validator->fails()) {
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];
    
            return response()->json($Data, 400);
        }
    
        $productos->MARCA = $request->MARCA;
        $productos->NOMBRE_PRODUCTO = $request->NOMBRE_PRODUCTO;
        $productos->DESCRIPCION_PRODUCTO = $request->DESCRIPCION_PRODUCTO;
        $productos->CARACTERISTICAS_PRODUCTO = $request->CARACTERISTICAS_PRODUCTO;
        $productos->PRECIO = $request->PRECIO;
        $productos->CANTIDAD_VENDIDOS = $request->CANTIDAD_VENDIDOS;
        $productos->PRECIO_CON_DESCUENTO = $request->PRECIO_CON_DESCUENTO;
        $productos->PORCENTAJES_DESCUENTOS = $request->PORCENTAJES_DESCUENTOS;
        $productos->STOCK = $request->STOCK;
        $productos->IMAGEN = $request->IMAGEN;
        $productos->ID_VENDEDOR = $request->ID_VENDEDOR;
        $productos->ID_CATEGORIA = $request->ID_CATEGORIA;
        $productos->COLORES_DISPONIBLES = $request->COLORES_DISPONIBLES;
        $productos->TIPO_ENVIO = $request->TIPO_ENVIO;
    
        $productos->save();
    
        $Data = [
            'message' => 'Producto actualizado',
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
}
