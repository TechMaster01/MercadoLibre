<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Billetera;
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
            'NOMBRES' => 'required|max:255',
            'APELLIDOS' => 'required',
            'EMAIL' => 'required|email',
            'TELEFONO' => 'required',
            'CONTRASENA' => 'required'
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
            'NOMBRES' => $request->NOMBRES,
            'APELLIDOS' => $request->APELLIDOS,
            'EMAIL' => $request->EMAIL,
            'TELEFONO' => $request->TELEFONO,
            'CONTRASENA' => hash('sha256', $request->CONTRASENA)
        ]);

        if(!$usuarios){
            $Data = [
                'message' => 'Error al crear el usuario',
                'status' => 500
            ];

            return response()->json($Data,500);
        }



        // Crear la billetera anidada al usuario
        $billeteraController = new billeteraController();
        $billeteraRequest = new Request(['ID_USUARIO' => $usuarios->id, ]); // Ajusta según el campo necesario en la billetera
        $billeteraResponse = $billeteraController->store($billeteraRequest);

        if($billeteraResponse->status() != 201){
            return response()->json([
                'message' => 'Usuario creado, pero hubo un error al crear la billetera',
                'usuario' => $usuarios,
                'status' => $billeteraResponse->status()
            ], $billeteraResponse->status());
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

        // Llama al método destroy de BilleteraDigitalController para eliminar la billetera
        $billeteraController = new billeteraController();
        $billetera = Billetera::where('ID_USUARIO', $id)->first();

        if ($billetera) {
            $billeteraController->destroy($billetera->id); // Pasa el ID de la billetera al método destroy
        }

        $usuarios->delete();

        $Data = [
            'message' => 'usuario eliminado',
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function update(Request $request, $id) {
        $usuarios = Usuarios::find($id);
    
        if (!$usuarios) {
            $data = [
                'message' => 'Usuario no encontrado',
                'status' => 404
            ];
    
            return response()->json($data, 404);
        }
    
        $validator = Validator::make($request->all(), [
            'NOMBRES' => 'required|max:255',
            'APELLIDOS' => 'required',
            'EMAIL' => 'required|email',
            'TELEFONO' => 'required',
            'CONTRASENA' => 'required'
        ]);
    
        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
    
            return response()->json($data, 400);
        }
    
        $usuarios->NOMBRES = $request->NOMBRES;
        $usuarios->APELLIDOS = $request->APELLIDOS;
        $usuarios->EMAIL = $request->EMAIL;
        $usuarios->TELEFONO = $request->TELEFONO;
        $usuarios->CONTRASENA = hash('sha256', $request->CONTRASENA);
    
        $usuarios->save();
    
        $data = [
            'message' => 'Usuario actualizado',
            'usuario' => $usuarios,
            'status' => 200
        ];
    
        return response()->json($data, 200);
    }    
}
