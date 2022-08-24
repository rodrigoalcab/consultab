<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;

class FichaController extends Controller
{
    
        public function getAllFichas() {
          // lógica para listar todas as fichas
          $fichas = Ficha::get()->toJson(JSON_PRETTY_PRINT);
          return response($fichas, 200);
        }

        public function getFicha($id) {
            // lógica para listar apenas uma ficha
            if (Ficha::where('id', $id)->exists()) {
              $ficha = Ficha::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
              return response($ficha, 200);
            } else {
              return response()->json([
                "message" => "A ficha não foi encontrada"
              ], 404);
            }
          }
    
        public function createFicha(Request $request) {
          // lógica para criar uma nova ficha
            $ficha = new Ficha;
            $ficha->competencia = $request->competencia;
            $ficha->codigo = $request->codigo;
            $ficha->descricao = $request->descricao;
            $ficha->save();

            return response()->json([
                "message" => "Ficha criada com sucesso!"
            ], 201);
        }
    
       
    
        public function updateFicha(Request $request, $id) {
          // lógica para atualizar uma ficha
        }
    
        public function deleteFicha ($id) {
          // lógica para remover uma ficha
          if(Ficha::where('id', $id)->exists()) {
            $ficha = Ficha::find($id);
            $ficha->delete();
    
            return response()->json([
              "message" => "Ficha removida com sucesso!"
            ], 202);
          } else {
            return response()->json([
              "message" => "A ficha não foi encontrada"
            ], 404);
          }
        }
}
