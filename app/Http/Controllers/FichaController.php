<?php

namespace App\Http\Controllers;

use App\Http\Requests\FichasRequest;
use Illuminate\Http\Request;
use App\Models\Ficha;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichas = Ficha::all();
        return view('fichas.index', compact('fichas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fichas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FichasRequest $request)
    {
        $dados = $request->all(); //implementar validated
        $ficha = new Ficha();
        //ficha::create($request->validated())
        $ficha->campo = $dados['campo'];
        $ficha->faixas = $dados['faixas'];
        $ficha->codigo = $dados['codigo'];
        $ficha->objetivos = $dados['objetivos'];
        $ficha->abordagem = $dados['abordagem'];
        $ficha->sugestoes = $dados['sugestoes'];

        $ficha->save();

        return redirect()        
        ->route('fichas.index')
        ->with('success', 'Ficha criada com sucesso!');       

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
    public function edit($id) //posso instanciar no lugar do $id, model bind
    {
        $ficha = Ficha::find($id);
        return view('fichas.edit', compact('ficha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FichasRequest $request, $id)
    {
        $dados = $request->all();
        $ficha = Ficha::find($id);

        $ficha->update($dados);

        return redirect()
        ->route('fichas.index')
        ->with('success', 'Ficha atualizada com sucesso!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ficha = Ficha::find($id);
        //dd($ficha);
        //var_dump($ficha);
        $ficha->delete();

        return redirect()
        ->route('fichas.index')
        ->with('success', 'Ficha removida com sucesso!');  ;   
    }
}
