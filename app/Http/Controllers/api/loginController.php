<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Validator;

class loginController extends Controller
{
    //
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'EMAIL' => 'required|email',
            'CONTRASENA' => 'required'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ], 400);
        }
    
        // Busca el usuario por email
        $user = Usuarios::where('EMAIL', $request->EMAIL)->first();
    
        // Verifica que el usuario exista y la contraseña sea correcta
        if ($user && hash('sha256', $request->CONTRASENA) === $user->CONTRASENA) {
            // Aquí puedes crear un token o iniciar sesión manualmente si es necesario
            return response()->json([
                'message' => 'Inicio de sesión exitoso',
                'user' => $user,
                'status' => 200
            ], 200);
        }
    
        // Respuesta de credenciales incorrectas
        return response()->json([
            'message' => 'Credenciales incorrectas',
            'status' => 401
        ], 401);        
    }
}
