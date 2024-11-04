<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class loginController extends Controller
{
    //
    public function index(){
        throw new NotFoundHttpException();
    }

    public function store(Request $request){
        // Si ambos campos están presentes
        if ($request->has(['EMAIL', 'CONTRASENA'])) {
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

            // Verifica si el usuario no existe y arroja un error 404
            if (!$user) {
                return response()->json([
                    'message' => 'Usuario no encontrado',
                    'status' => 404
                ], 404);
            }

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
        // Si solo se pasa el campo EMAIL
        elseif ($request->has('EMAIL')) {
            $validator = Validator::make($request->all(), [
                'EMAIL' => 'required|email'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Error en la validación de los datos',
                    'errors' => $validator->errors(),
                    'status' => 400
                ], 400);
            }

            $user = Usuarios::where('EMAIL', $request->EMAIL)->first();

            if (!$user) {
                return response()->json([
                    'message' => 'Usuario no encontrado',
                    'status' => 404
                ], 404);
            } else {
                return response()->json([
                    'message' => 'Usuario encontrado',
                    'status' => 201
                ], 201);
            }
        }
        // Si no se pasa ni EMAIL ni CONTRASENA
        else {
            return response()->json([
                'message' => 'Campo requerido no encontrado (EMAIL o CONTRASENA)',
                'status' => 400
            ], 400);
        }
    }
}
