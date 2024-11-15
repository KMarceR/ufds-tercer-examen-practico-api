<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
    // Endpoint para obtener todos los países
    public function select(){
        try {
            $paises = Pais::all();
            if($paises->count()>0){
                return response()->json([
                    'code' => 200,
                    'data'=> $paises
                ], 200); 
            } else {
                return response()->json([
                    'code' => 404,
                    'data'=> 'No hay países'
                ], 404); 
            }
        } catch (\Throwable $th) {
        return response()->json($th->getMessage(), 500);
        } 
    }
    
}
