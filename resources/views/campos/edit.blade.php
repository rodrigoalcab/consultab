@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('campos.update', [$campo->id])}}" method="post">

        @csrf
        @method("PUT")
            
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="descricao" class="form-control" value="{{ $campo->descricao }}">
        </div>
                  
        <button class="btn btn-lg btn-success">Atualizar</button>
     </form>

</div>



@endsection



