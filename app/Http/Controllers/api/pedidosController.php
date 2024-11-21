<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Pedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class pedidosController extends Controller
{
    //
    public function index(){

        $pedidos = Pedidos::all();

        if($pedidos->isEmpty()){
            return response()->json(['message' => 'No hay pedidos en el registro'], 404);
        }

        return response()->json($pedidos, 200);
        //return 'Obteniendo lista de clientes desde el controller';
    }

    public function show($id){
        $pedidos = Pedidos::find($id);


        if(!$pedidos){
            $Data = [
                'message' => 'Pedido no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $Data = [
            'pedido' => $pedidos,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function store(Request $request){
        $Validator = Validator::make($request->all(), [
            'ID_USUARIO' => 'required|exists:USUARIOS,id',
            'FECHA_PEDIDO' => 'required',
            'MONTO_TOTAL' => 'required',
            'ESTADO_ENVIO' => 'required',
            'ID_CARRITO' => 'required'
        ]);

        if($Validator->fails()){
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }

        $pedidos = Pedidos::create([
            'ID_USUARIO' => $request->ID_USUARIO,
            'FECHA_PEDIDO' => $request->FECHA_PEDIDO,
            'MONTO_TOTAL' => $request->MONTO_TOTAL,
            'ESTADO_ENVIO' => $request->ESTADO_ENVIO,
            'ID_CARRITO' => $request->ID_CARRITO
        ]);

        if(!$pedidos){
            $Data = [
                'message' => 'Error al crear el pedido',
                'status' => 500
            ];

            return response()->json($Data,500);
        }

        $Data = [
            'pedido' => $pedidos,
            'status' => 201
        ];

        return response()->json($Data, 201);
    }
    
    public function update(Request $request, $id){
        $pedidos = Pedidos::find($id);

        if(!$pedidos){
            $Data = [
                'message' => 'Pedido no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $Validator = Validator::make($request->all(), [
            'ID_USUARIO' => 'required|exists:USUARIOS,id',
            'FECHA_PEDIDO' => 'required',
            'MONTO_TOTAL' => 'required',
            'ESTADO_ENVIO' => 'required',
            'ID_CARRITO' => 'required'
        ]);

        if($Validator->fails()){
            $Data = [
                'message' => 'Error en la validación de los datos',
                'Errors' => $Validator->errors(),
                'status' => 400
            ];

            return response()->json($Data, 400);
        }

        $pedidos->ID_USUARIO = $request->ID_USUARIO;
        $pedidos->FECHA_PEDIDO = $request->FECHA_PEDIDO;
        $pedidos->MONTO_TOTAL = $request->MONTO_TOTAL;
        $pedidos->ESTADO_ENVIO = $request->ESTADO_ENVIO;
        $pedidos->ID_CARRITO = $request->ID_CARRITO;

        $pedidos->save();

        $Data = [
            'message' => 'Pedido actualizado',
            'pedido' => $pedidos,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }
    
    public function destroy($id){
        $pedidos = Pedidos::find($id);

        if(!$pedidos){
            $Data = [
                'message' => 'Pedido no encontrado',
                'status' => 404
            ];

            return response()->json($Data, 404);
        }

        $pedidos->delete();

        $Data = [
            'message' => 'Pedido eliminado',
            'status' => 200
        ];

        return response()->json($Data, 200);
    }
}