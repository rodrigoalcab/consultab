<?php

namespace App\Http\Controllers;

use App\Models\Faixa;
use Illuminate\Http\Request;

class ApiFaixaController extends Controller
{
    public function index()
    {
      // ver api resource
         // lógica para listar todas as fichas
         $faixas = Faixa::get();
         return response()->json($faixas, 200);
         //return csrf_token(); 
    }
}