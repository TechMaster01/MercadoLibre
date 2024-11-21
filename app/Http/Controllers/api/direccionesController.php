<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Direcciones;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Validator;

class direccionesController extends Controller
{
    //
    public function index(){
        throw new NotFoundHttpException();
    }

    public function show($id){
        $Direcciones = Direcciones::where('ID_USUARIO', $id)->get();

        if ($Direcciones->count() === 0) {
            return response()->json([
                'message' => 'El usuario no ha registrado ninguna dirección',
                'status' => 404
            ], 404);
        }

        $Data = [
            'Direcciones' => $Direcciones,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function store(Request $request){
        $Validator = Validator::make($request->all(), [
            'ID_USUARIO' => 'required',
            'NOMBRE_COMPLETO' => 'required|max:255',
            'CODIGO_POSTAL' => 'required|max:5',
            'ESTADO' => 'required',
            'MUNICIPIO' => 'required',
            'COLONIA' => 'required',
            'CALLE' => 'required',
            'NUMERO_EXTERIOR' => 'required',
            'NUMERO_INTERIOR' => 'required',
            'CALLE_1' => 'required',
            'CALLE_2' => 'required',
            'CONTACTO' => 'required|max:10',
            'INDICACIONES' => 'required|max:255'
        ]);

        if($Validator->fails()){
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }

        $direccion = Direcciones::create([
            'ID_USUARIO' => $request->ID_USUARIO,
            'NOMBRE_COMPLETO' => $request->NOMBRE_COMPLETO,
            'CODIGO_POSTAL' => $request->CODIGO_POSTAL,
            'ESTADO' => $request->ESTADO,
            'MUNICIPIO' => $request->MUNICIPIO,
            'COLONIA' => $request->COLONIA,
            'CALLE' => $request->CALLE,
            'NUMERO_EXTERIOR' => $request->NUMERO_EXTERIOR,
            'NUMERO_INTERIOR' => $request->NUMERO_INTERIOR,
            'CALLE_1' => $request->CALLE_1,
            'CALLE_2' => $request->CALLE_2,
            'CONTACTO' => $request->CONTACTO,
            'INDICACIONES' => $request->INDICACIONES
        ]);

        if(!$direccion){
            $Data = [
                'message' => 'Error al registrar la direccion',
                'status' => 500
            ];

            return response()->json($Data,500);
        }

        $Data = [
            'direccion' => $direccion,
            'status' => 201
        ];

        return response()->json($Data, 201);
    }

    public function update(Request $request, $id){
        $direccion = Direcciones::find($id);

        if (!$direccion) {
            $data = [
                'message' => 'Dirección no encontrada',
                'status' => 404
            ];
    
            return response()->json($data, 404);
        }

        $Validator = Validator::make($request->all(), [
            'ID_USUARIO' => 'required',
            'NOMBRE_COMPLETO' => 'required|max:255',
            'CODIGO_POSTAL' => 'required|max:5',
            'ESTADO' => 'required',
            'MUNICIPIO' => 'required',
            'COLONIA' => 'required',
            'CALLE' => 'required',
            'NUMERO_EXTERIOR' => 'required',
            'NUMERO_INTERIOR' => 'required',
            'CALLE_1' => 'required',
            'CALLE_2' => 'required',
            'CONTACTO' => 'required|max:10',
            'INDICACIONES' => 'required|max:255'
        ]);

        if($Validator->fails()){
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }
        
        $direccion->ID_USUARIO = $request->ID_USUARIO;
        $direccion->NOMBRE_COMPLETO = $request->NOMBRE_COMPLETO;
        $direccion->CODIGO_POSTAL = $request->CODIGO_POSTAL;
        $direccion->ESTADO = $request->ESTADO;
        $direccion->MUNICIPIO = $request->MUNICIPIO;
        $direccion->COLONIA = $request->COLONIA;
        $direccion->CALLE = $request->CALLE;
        $direccion->NUMERO_EXTERIOR = $request->NUMERO_EXTERIOR;
        $direccion->NUMERO_INTERIOR = $request->NUMERO_INTERIOR;
        $direccion->CALLE_1 = $request->CALLE_1;
        $direccion->CALLE_2 = $request->CALLE_2;
        $direccion->CONTACTO = $request->CONTACTO;
        $direccion->INDICACIONES = $request->INDICACIONES;

        $direccion->save();

        $data = [
            'message' => 'Dirección actualizada',
            'usuario' => $direccion,
            'status' => 200
        ];
    
        return response()->json($data, 200);
    }

    public function destroy($id){
        $direccion = Direcciones::find($id);

        if(!$direccion){
            $Data = [
                'message' => 'Direccion no encontrada',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $direccion->delete();

        $Data = [
            'message' => 'Dirección eliminada',
            'status' => 200
        ];

        return response()->json($Data, 200);
    }
}