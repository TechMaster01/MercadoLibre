<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clientes;
use Illuminate\Support\Facades\Validator;

class clientesController extends Controller
{
    //
    public function index(){

        $clientes = Clientes::all();

        if($clientes->isEmpty()){
            return response()->json(['message' => 'No hay clientes en el registro'], 404);
        }

        return response()->json($clientes, 200);
        //return 'Obteniendo lista de clientes desde el controller';
    }

    public function store(Request $request){
        $Validator = Validator::make($request->all(), [
            'NOMBRE_USUARIO' => 'required|max:255',
            'EMAIL' => 'required|email',
            'TELEFONO' => 'required',
            'CONTRASENA' => 'required',
            'IMAGEN_PERFIL' => 'required'
        ]);

        if($Validator->fails()){
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }

        $clientes = Clientes::create([
            'NOMBRE_USUARIO' => $request->NOMBRE_USUARIO,
            'EMAIL' => $request->EMAIL,
            'TELEFONO' => $request->TELEFONO,
            'CONTRASENA' => $request->CONTRASENA,
            'IMAGEN_PERFIL' => $request->IMAGEN_PERFIL
        ]);

        if(!$clientes){
            $Data = [
                'message' => 'Error al crear el cliente',
                'status' => 500
            ];

            return response()->json($Data,500);
        }

        $Data = [
            'cliente' => $clientes,
            'status' => 201
        ];

        return response()->json($Data, 201);
    }

    public function show($id){
        $clientes = Clientes::find($id);


        if(!$clientes){
            $Data = [
                'message' => 'Cliente no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $Data = [
            'cliente' => $clientes,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function destroy($id){
        $clientes = Clientes::find($id);

        if(!$clientes){
            $Data = [
                'message' => 'Cliente no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $clientes->delete();

        $Data = [
            'message' => 'Cliente eliminado',
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function update(Request $request, $id){
        $clientes = Clientes::find($id);

        if(!$clientes){
            $Data = [
                'message' => 'Cliente no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $Validator = Validator::make($request->all(), [
            'NOMBRE_USUARIO' => 'required|max:255',
            'EMAIL' => 'required|email',
            'TELEFONO' => 'required',
            'CONTRASENA' => 'required',
            'IMAGEN_PERFIL' => 'required'
        ]);

        if($Validator->fails()){
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }

        $clientes->NOMBRE_USUARIO = $request->NOMBRE_USUARIO;
        $clientes->EMAIL = $request->EMAIL;
        $clientes->TELEFONO = $request->TELEFONO;
        $clientes->CONTRASENA = $request->CONTRASENA;
        $clientes->IMAGEN_PERFIL = $request->IMAGEN_PERFIL;

        $clientes->save();

        $Data = [
            'message' => 'Cliente actualizado',
            'cliente' => $clientes,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }
}
