<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Tarjetas;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Validator;

class tarjetasController extends Controller
{
    //
    public function index(){
        throw new NotFoundHttpException();
    }

    public function show($id){
        $Tarjetas = Tarjetas::where('ID_BILLETERA', $id)->get();

        if($Tarjetas->count() === 0){
            return response()->json([
                'message' => 'No hay tarjetas en tu billetera',
                'status' => 404
            ], 404);
        }

        $Data = [
            'Lista:' => $Tarjetas,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function store(Request $request) {
        $Validator = Validator::make($request->all(), [
            'ID_BILLETERA' => 'required',
            'NUMERO_TARJETA' => 'required|digits:16',
            'NOMBRE_TITULAR' => 'required|max:255',
            'FECHA_EXPIRACION' => 'required|date_format:m/y',
            'CVV' => 'required|digits:3',
            'APODO' => 'nullable|max:255'
        ]);
    
        if ($Validator->fails()) {
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];
    
            return response()->json($Data, 400);
        }
    
        // Verificar si la tarjeta ya está registrada en la billetera
        $existeTarjeta = Tarjetas::where('ID_BILLETERA', $request->ID_BILLETERA)
                                   ->where('NUMERO_TARJETA', $request->NUMERO_TARJETA)
                                   ->exists();
    
        if ($existeTarjeta) {
            $Data = [
                'message' => 'La tarjeta ya está registrada en la billetera',
                'status' => 409
            ];
    
            return response()->json($Data, 409); // Código 409 para conflictos de datos
        }
    
        $Tarjeta = Tarjetas::create([
            'ID_BILLETERA' => $request->ID_BILLETERA,
            'NUMERO_TARJETA' => $request->NUMERO_TARJETA,
            'NOMBRE_TITULAR' => $request->NOMBRE_TITULAR,
            'FECHA_EXPIRACION' => $request->FECHA_EXPIRACION,
            'CVV' => $request->CVV,
            'APODO' => $request->APODO
        ]);
    
        if (!$Tarjeta) {
            $Data = [
                'message' => 'Error al registrar la tarjeta',
                'status' => 500
            ];
    
            return response()->json($Data, 500);
        }
    
        $Data = [
            'tarjeta' => $Tarjeta,
            'status' => 201
        ];
    
        return response()->json($Data, 201);
    }

    public function update(Request $request, $id)
    {
        // Buscar la tarjeta por ID
        $tarjeta = Tarjetas::where('NUMERO_TARJETA', $id)->first();

        if (!$tarjeta) {
            $data = [
                'message' => 'Tarjeta no encontrada',
                'status' => 404
            ];

            return response()->json($data, 404);
        }

        // Validación de los datos
        $Validator = Validator::make($request->all(), [
            'ID_BILLETERA' => 'required',
            'NUMERO_TARJETA' => 'required|digits:16',
            'NOMBRE_TITULAR' => 'required|max:255',
            'FECHA_EXPIRACION' => 'required|date_format:m/y',
            'CVV' => 'required|digits:3',
            'APODO' => 'nullable|max:255'
        ]);

        if ($Validator->fails()) {
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }

        // Actualizar los datos de la tarjeta
        $tarjeta->ID_BILLETERA = $request->ID_BILLETERA;
        $tarjeta->NUMERO_TARJETA = $request->NUMERO_TARJETA;
        $tarjeta->NOMBRE_TITULAR = $request->NOMBRE_TITULAR;
        $tarjeta->FECHA_EXPIRACION = $request->FECHA_EXPIRACION;
        $tarjeta->CVV = $request->CVV;
        $tarjeta->APODO = $request->APODO;

        // Guardar los cambios
        $tarjeta->save();

        $Data = [
            'message' => 'Tarjeta actualizada',
            'tarjeta' => $tarjeta,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function destroy($id){
        $Tarjeta = Tarjetas::where('NUMERO_TARJETA', $id)->first();

        if (!$Tarjeta) {
            $data = [
                'message' => 'La tarjeta no esta en la billetera',
                'status' => 404
            ];
    
            return response()->json($data, 404);
        }
    
        // Elimina el favorito
        $Tarjeta->delete();
    
        $data = [
            'message' => 'Tarjeta eliminada correctamente',
            'status' => 200
        ];
    
        return response()->json($data, 200);  
    }
}
