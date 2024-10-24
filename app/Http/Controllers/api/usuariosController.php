<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class usuariosController extends Controller
{
    //
    public function index(){

        $usuarios = Usuarios::all();

        if($usuarios->isEmpty()){
            return response()->json(['message' => 'No hay usuarios en el registro'], 404);
        }

        return response()->json($usuarios, 200);
        //return 'Obteniendo lista de clientes desde el controller';
    }

    public function store(Request $request){
        $Validator = Validator::make($request->all(), [
            'NOMBRE_USUARIO' => 'required|max:255',
            'EMAIL' => 'required|email',
            'TELEFONO' => 'required',
            'CONTRASENA' => 'required',
            'IMAGEN_PERFIL' => 'required',
            'ACTIVO' => 'required|boolean'
        ]);

        if($Validator->fails()){
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }

        $usuarios = Usuarios::create([
            'NOMBRE_USUARIO' => $request->NOMBRE_USUARIO,
            'EMAIL' => $request->EMAIL,
            'TELEFONO' => $request->TELEFONO,
            'CONTRASENA' => $request->CONTRASENA,
            'IMAGEN_PERFIL' => $request->IMAGEN_PERFIL,
            'ACTIVO' => $request->ACTIVO
        ]);

        if(!$usuarios){
            $Data = [
                'message' => 'Error al crear el usuario',
                'status' => 500
            ];

            return response()->json($Data,500);
        }

        $Data = [
            'usuario' => $usuarios,
            'status' => 201
        ];

        return response()->json($Data, 201);
    }

    public function show($id){
        $usuarios = Usuarios::find($id);


        if(!$usuarios){
            $Data = [
                'message' => 'Usuario no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $Data = [
            'usuario' => $usuarios,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function destroy($id){
        $usuarios = Usuarios::find($id);

        if(!$usuarios){
            $Data = [
                'message' => 'Usuario no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $usuarios->delete();

        $Data = [
            'message' => 'usuario eliminado',
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function update(Request $request, $id){
        $usuarios = Usuarios::find($id);

        if(!$usuarios){
            $Data = [
                'message' => 'Usuario no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $Validator = Validator::make($request->all(), [
            'NOMBRE_USUARIO' => 'required|max:255',
            'EMAIL' => 'required|email',
            'TELEFONO' => 'required',
            'CONTRASENA' => 'required',
            'IMAGEN_PERFIL' => 'required',
            'ACTIVO' => 'required'
        ]);

        if($Validator->fails()){
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }

        $usuarios->NOMBRE_USUARIO = $request->NOMBRE_USUARIO;
        $usuarios->EMAIL = $request->EMAIL;
        $usuarios->TELEFONO = $request->TELEFONO;
        $usuarios->CONTRASENA = $request->CONTRASENA;
        $usuarios->IMAGEN_PERFIL = $request->IMAGEN_PERFIL;
        $usuarios->ACTIVO = $request->ACTIVO;

        $usuarios->save();

        $Data = [
            'message' => 'Usuario actualizado',
            'usuario' => $usuarios,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }
}
