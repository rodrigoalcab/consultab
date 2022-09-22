<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;

class ApiFichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // ver api resource
         // lógica para listar todas as fichas
         $fichas = Ficha::get()->toJson(JSON_PRETTY_PRINT);
         return response($fichas, 200);
         //return csrf_token(); 
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // lógica para criar uma nova ficha
         $ficha = new Ficha;
         $ficha->campo = $request->campo;
         $ficha->faixas = $request->faixas;
         $ficha->codigo = $request->codigo;
         $ficha->objetivos = $request->objetivos;
         $ficha->abordagem = $request->abordagem;
         $ficha->sugestoes = $request->sugestoes;
         $ficha->save();
 
         return response()->json([
             "message" => "Ficha criada com sucesso!"
         ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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

  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      if (Ficha::where('id', $id)->exists()) {
        $ficha = Ficha::find($id);
        $ficha->competencia = is_null($request->competencia) ? $ficha->competencia : $request->competencia;
        $ficha->codigo = is_null($request->codigo) ? $ficha->codigo : $request->codigo;
        $ficha->descricao = is_null($request->descricao) ? $ficha->descricao : $request->descricao;
        $ficha->save();

        return response()->json([
            "message" => "Ficha atualizada com sucesso!"
        ], 200);
        } else {
        return response()->json([
            "message" => "A ficha não foi encontrada"
        ], 404);
        
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
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
