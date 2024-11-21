<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Billetera;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Validator;

class billeteraController extends Controller
{
    //
    public function index(){
        throw new NotFoundHttpException();
    }

    public function store(Request $request){
        $Validator = Validator::make($request->all(), [
            'ID_USUARIO' => 'required',
            'SALDO',
            'TIPO_MONEDA'
        ]);

        if($Validator->fails()){
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }

        $Billetera = Billetera::create([
            'ID_USUARIO' => $request->ID_USUARIO,
            'SALDO' => $request->SALDO ?? 0.00,
            'MONEDA' => $request->MONEDA ?? 'MXN'
        ]);

        if(!$Billetera){
            $Data = [
                'message' => 'Error al crear la billetera',
                'status' => 500
            ];

            return response()->json($Data,500);
        }

        $Data = [
            'Billetera' => $Billetera,
            'status' => 201
        ];

        return response()->json($Data, 201);
    }

    public function show($id){
        $Billetera = Billetera::where('ID_USUARIO', $id)->first();

        if(!$Billetera){
            $Data = [
                'message' => 'Billetera no encontrada',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $Data = [
            'Billetera' => $Billetera,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function destroy($id){
        $Billetera = Billetera::find($id);

        if(!$Billetera){
            $Data = [
                'message' => 'Billetera no encontrada',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $Billetera->delete();

        $Data = [
            'message' => 'Billetera eliminada',
            'status' => 200
        ];

        return response()->json($Data, 200);
    }
}