<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Validator;

class comentariosController extends Controller
{
    //
    public function index(){
        throw new NotFoundHttpException();        
    }

    public function show($id){
        
    }

    public function store(Request $request){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        
    }
}