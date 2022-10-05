@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('faixas.update', [$faixa->id])}}" method="post">

        @csrf
        @method("PUT")
            
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="descricao" class="form-control" value="{{ $faixa->descricao }}">
        </div>
                  
        <button class="btn btn-lg btn-success">Atualizar</button>
     </form>

</div>



@endsection



