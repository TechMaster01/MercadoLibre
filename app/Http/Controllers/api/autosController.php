<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Autos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class autosController extends Controller
{
    //
    public function index(){
        $autos = Autos::all();

        if($autos->isEmpty()){
            return response()->json(['message' => 'No hay registros'], 404);
        }

        return response()->json($autos, 200);
    }

    public function show($id){
        $autos = Autos::find($id);


        if(!$autos){
            $Data = [
                'message' => 'Porducto no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $Data = [
            'autos' => $autos,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'TIPO_VEHICULO' => 'required|string|max:255',
            'MARCA' => 'required|string|max:255',
            'MODELO' => 'required|string|max:255',
            'FECHA_PUBLICACION' => 'nullable|date',
            'PRECIO' => 'required|numeric',
            'FINANCIADO' => 'required|boolean',
            'ANIO_VEHICULO' => 'required|integer|min:1900|max:' . date('Y'),
            'KILOMETRAJE' => 'required|integer|min:0',
            'PREGUNTAS_CLIENTE' => 'nullable|string',
            'CARACTERISTICAS' => 'nullable|string',
            'DESCRIPCION' => 'nullable|string',
            'INFORMACION_VENDEDOR' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ], 400);
        }

        $auto = Autos::create([
            'TIPO_VEHICULO' => $request->TIPO_VEHICULO,
            'MARCA' => $request->MARCA,
            'MODELO' => $request->MODELO,
            'FECHA_PUBLICACION' => $request->FECHA_PUBLICACION,
            'PRECIO' => $request->PRECIO,
            'FINANCIADO' => $request->FINANCIADO,
            'ANIO_VEHICULO' => $request->ANIO_VEHICULO,
            'KILOMETRAJE' => $request->KILOMETRAJE,
            'PREGUNTAS_CLIENTE' => $request->PREGUNTAS_CLIENTE,
            'CARACTERISTICAS' => $request->CARACTERISTICAS,
            'DESCRIPCION' => $request->DESCRIPCION,
            'INFORMACION_VENDEDOR' => $request->INFORMACION_VENDEDOR,
        ]);

        if (!$auto) {
            return response()->json([
                'message' => 'Error al crear el auto',
                'status' => 500
            ], 500);
        }

        return response()->json([
            'auto' => $auto,
            'message' => 'Auto creado exitosamente',
            'status' => 201
        ], 201);
    }

    public function update(Request $request, $id){
        $auto = Autos::find($id); // Modelo Auto debe estar configurado previamente

        if (!$auto) {
            return response()->json([
                'message' => 'Auto no encontrado',
                'status' => 404
            ], 404);
        }

        // Validar los datos recibidos
        $validator = Validator::make($request->all(), [
            'TIPO_VEHICULO' => 'required|string|max:255',
            'MARCA' => 'required|string|max:255',
            'MODELO' => 'required|string|max:255',
            'FECHA_PUBLICACION' => 'nullable|date',
            'PRECIO' => 'required|numeric',
            'FINANCIADO' => 'required|boolean',
            'ANIO_VEHICULO' => 'required|integer|min:1900|max:' . date('Y'),
            'KILOMETRAJE' => 'required|integer|min:0',
            'PREGUNTAS_CLIENTE' => 'nullable|string',
            'CARACTERISTICAS' => 'nullable|string',
            'DESCRIPCION' => 'nullable|string',
            'INFORMACION_VENDEDOR' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ], 400);
        }

        // Actualizar los campos del registro
        $auto->TIPO_VEHICULO = $request->TIPO_VEHICULO;
        $auto->MARCA = $request->MARCA;
        $auto->MODELO = $request->MODELO;
        $auto->FECHA_PUBLICACION = $request->FECHA_PUBLICACION;
        $auto->PRECIO = $request->PRECIO;
        $auto->FINANCIADO = $request->FINANCIADO;
        $auto->ANIO_VEHICULO = $request->ANIO_VEHICULO;
        $auto->KILOMETRAJE = $request->KILOMETRAJE;
        $auto->PREGUNTAS_CLIENTE = $request->PREGUNTAS_CLIENTE;
        $auto->CARACTERISTICAS = $request->CARACTERISTICAS;
        $auto->DESCRIPCION = $request->DESCRIPCION;
        $auto->INFORMACION_VENDEDOR = $request->INFORMACION_VENDEDOR;

        // Guardar los cambios en la base de datos
        try {
            $auto->save();
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error al actualizar el auto',
                'error' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
        

        return response()->json([
            'message' => 'Auto actualizado exitosamente',
            'auto' => $auto,
            'status' => 200
        ], 200);
    }

    public function destroy($id){
        $autos = Autos::find($id);

        if(!$autos){
            $Data = [
                'message' => 'Registro no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $autos->delete();

        $Data = [
            'message' => 'Registro eliminado',
            'status' => 200
        ];

        return response()->json($Data, 200);
    }
}