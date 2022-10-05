<?php

namespace App\Http\Controllers;

use App\Http\Requests\FichasRequest;
use Illuminate\Http\Request;
use App\Models\Ficha;
use App\Models\Campo;
use App\Models\Faixa;

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
        $campos = Campo::all();
        $faixas = Faixa::all();

        return view('fichas.create', compact('campos', 'faixas'));
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
        $ficha->campo_id = $dados['campo_id'];
        $ficha->faixa_id = $dados['faixa_id'];
        $ficha->codigo = $dados['codigo'];
        $ficha->objetivos = $dados['objetivos'];
        $ficha->abordagem = $dados['abordagem'];
        $ficha->sugestoes = $dados['sugestoes'];
        $ficha->recurso = $dados['recurso'];
        $ficha->link_recurso = $dados['link_recurso'];
        $ficha->propaganda = $dados['propaganda'];
        $ficha->link_propaganda = $dados['link_propaganda'];

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
        $campos = Campo::all();
        $faixas = Faixa::all();
        $ficha = Ficha::find($id);      

        return view('fichas.edit', compact('campos', 'faixas','ficha'));

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
