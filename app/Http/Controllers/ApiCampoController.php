<?php

namespace App\Http\Controllers;

use App\Models\Campo;
use Illuminate\Http\Request;

class ApiCampoController extends Controller
{
    public function index()
    {
      // ver api resource
         // lógica para listar todas as fichas
         $campos = Campo::get();
         return response()->json($campos, 200);
         //return csrf_token(); 
    }
}
