<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Inmuebles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class inmueblesController extends Controller
{
    //
    public function index(){
        $inmuebles = Inmuebles::All();

        if($inmuebles->empty()){
            return response()->json(['message' => 'No hay registros'], 404);
        }

        return response()->json($inmuebles, 200);
    }

    public function show($id){
        $inmueble = Inmuebles::find($id);

        if(!$inmueble){
            $Data = [
                'message' => 'Inmueble no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $Data = [
            'Inmueble' => $inmueble,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function store(Request $request) {
        $Validator = Validator::make($request->all(), [
            'TIPO_INMUEBLES' => 'required|string|max:255',
            'TITULO' => 'required|string|max:255',
            'FECHA_PUBLICACION' => 'required|date',
            'AUTOR_PUBLICACION' => 'required|string|max:255',
            'PRECIO' => 'required|numeric',
            'METROS_INMUEBLE' => 'required|numeric',
            'NUMERO_RECAMARAS' => 'required|integer|min:0',
            'NUMERO_BANOS' => 'required|integer|min:0',
            'UBICACION' => 'required|string|max:255',
            'CARACTERISTICAS_INMUEBLE' => 'nullable|string',
            'INFORMACION_ZONA' => 'nullable|string',
            'DESCRIPCION' => 'required|string',
            'INFORMACION_TIENDA' => 'nullable|string'
        ]);
    
        if ($Validator->fails()) {
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];
    
            return response()->json($Data, 400);
        }
    
        $inmueble = Inmuebles::create([
            'TIPO_INMUEBLES' => $request->TIPO_INMUEBLES,
            'TITULO' => $request->TITULO,
            'FECHA_PUBLICACION' => $request->FECHA_PUBLICACION,
            'AUTOR_PUBLICACION' => $request->AUTOR_PUBLICACION,
            'PRECIO' => $request->PRECIO,
            'METROS_INMUEBLE' => $request->METROS_INMUEBLE,
            'NUMERO_RECAMARAS' => $request->NUMERO_RECAMARAS,
            'NUMERO_BANOS' => $request->NUMERO_BANOS,
            'UBICACION' => $request->UBICACION,
            'CARACTERISTICAS_INMUEBLE' => $request->CARACTERISTICAS_INMUEBLE,
            'INFORMACION_ZONA' => $request->INFORMACION_ZONA,
            'DESCRIPCION' => $request->DESCRIPCION,
            'INFORMACION_TIENDA' => $request->INFORMACION_TIENDA
        ]);
    
        if (!$inmueble) {
            $Data = [
                'message' => 'Error al crear el inmueble',
                'status' => 500
            ];
    
            return response()->json($Data, 500);
        }
    
        $Data = [
            'inmueble' => $inmueble,
            'status' => 201
        ];
    
        return response()->json($Data, 201);
    }    

    public function update(Request $request, $id) {
        $inmueble = Inmuebles::find($id);
    
        if (!$inmueble) {
            $Data = [
                'message' => 'Inmueble no encontrado',
                'status' => 404
            ];
    
            return response()->json($Data, 404);
        }
    
        $Validator = Validator::make($request->all(), [
            'TIPO_INMUEBLES' => 'required|string|max:255',
            'TITULO' => 'required|string|max:255',
            'FECHA_PUBLICACION' => 'required|date',
            'AUTOR_PUBLICACION' => 'required|string|max:255',
            'PRECIO' => 'required|numeric',
            'METROS_INMUEBLE' => 'required|numeric',
            'NUMERO_RECAMARAS' => 'required|integer|min:0',
            'NUMERO_BANOS' => 'required|integer|min:0',
            'UBICACION' => 'required|string|max:255',
            'CARACTERISTICAS_INMUEBLE' => 'nullable|string',
            'INFORMACION_ZONA' => 'nullable|string',
            'DESCRIPCION' => 'required|string',
            'INFORMACION_TIENDA' => 'nullable|string'
        ]);
    
        if ($Validator->fails()) {
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];
    
            return response()->json($Data, 400);
        }
    
        $inmueble->TIPO_INMUEBLES = $request->TIPO_INMUEBLES;
        $inmueble->TITULO = $request->TITULO;
        $inmueble->FECHA_PUBLICACION = $request->FECHA_PUBLICACION;
        $inmueble->AUTOR_PUBLICACION = $request->AUTOR_PUBLICACION;
        $inmueble->PRECIO = $request->PRECIO;
        $inmueble->METROS_INMUEBLE = $request->METROS_INMUEBLE;
        $inmueble->NUMERO_RECAMARAS = $request->NUMERO_RECAMARAS;
        $inmueble->NUMERO_BANOS = $request->NUMERO_BANOS;
        $inmueble->UBICACION = $request->UBICACION;
        $inmueble->CARACTERISTICAS_INMUEBLE = $request->CARACTERISTICAS_INMUEBLE;
        $inmueble->INFORMACION_ZONA = $request->INFORMACION_ZONA;
        $inmueble->DESCRIPCION = $request->DESCRIPCION;
        $inmueble->INFORMACION_TIENDA = $request->INFORMACION_TIENDA;
    
        $inmueble->save();
    
        $Data = [
            'message' => 'Inmueble actualizado',
            'inmueble' => $inmueble,
            'status' => 200
        ];
    
        return response()->json($Data, 200);
    }    

    public function destroy($id){
        $inmueble = Inmuebles::find($id);

        if(!$inmueble){
            $Data = [
                'message' => 'Inmueble no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $inmueble->delete();

        $Data = [
            'message' => 'Inmueble eliminada',
            'status' => 200
        ];

        return response()->json($Data, 200);
    }
}