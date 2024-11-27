<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Carrito_Productos;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Validator;

class carritoController extends Controller
{
    //
    public function index(){
        throw new NotFoundHttpException();
    }

    public function show($id){
        $Carrito = Carrito_Productos::where('ID_CARRITO', $id)->get();

        if(!$Carrito){
            return response()->json([
                'message' => 'El carrito no existe',
                'status' => 404
            ], 404);
        }

        if($Carrito->count()===0){
            return response()->json([
                'message' => 'El carrito esta vacio',
                'status' => 404
            ], 404);
        }

        $Data = [
            'Lista:' => $Carrito,
            'status' => 200
        ];

        return response()->json($Data, 200);
    }

    public function store(Request $request){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        
    }
}