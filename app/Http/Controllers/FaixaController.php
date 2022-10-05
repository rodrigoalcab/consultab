<?php

namespace App\Http\Controllers;

use App\Models\Faixa;
use Illuminate\Http\Request;

class FaixaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faixas = Faixa::all();
        return view('faixas.index', compact('faixas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faixas.create');
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
        $faixa = new Faixa();
        //ficha::create($request->validated())
        $faixa->descricao = $dados['descricao'];

        $faixa->save();

        return redirect()        
        ->route('faixas.index')
        ->with('success', 'Faixa criada com sucesso!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faixa  $faixa
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
        $faixa = Faixa::find($id);      

        return view('faixas.edit', compact('faixa'));
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

        $faixa = Faixa::find($id);

        $faixa->update($dados);

        return redirect()
        ->route('faixas.index')
        ->with('success', 'Faixa atualizada com sucesso!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faixa = Faixa::find($id);
        //dd($ficha);
        //var_dump($ficha);
        $faixa->delete();

        return redirect()
        ->route('faixas.index')
        ->with('success', 'Faixa removida com sucesso!');
    }
}
