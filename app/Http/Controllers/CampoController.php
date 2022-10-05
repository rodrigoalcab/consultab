<?php

namespace App\Http\Controllers;

use App\Models\Campo;
use Illuminate\Http\Request;

class CampoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campos = Campo::all();
        return view('campos.index', compact('campos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all(); //implementar validated
        $campo = new Campo();
        //ficha::create($request->validated())
        $campo->descricao = $dados['descricao'];

        $campo->save();

        return redirect()        
        ->route('campos.index')
        ->with('success', 'Campo criada com sucesso!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campo = Campo::find($id);      

        return view('campos.edit', compact('campo'));
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
        $dados = $request->all();       

        $campo = Campo::find($id);

        $campo->update($dados);

        return redirect()
        ->route('campos.index')
        ->with('success', 'Campo atualizado com sucesso!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campo = Campo::find($id);
        //dd($ficha);
        //var_dump($ficha);
        $campo->delete();

        return redirect()
        ->route('campos.index')
        ->with('success', 'Campo removido com sucesso!');
    }
}
