@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{route('campos.store')}}" method="post">

        @csrf    
        
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="descricao" class="form-control" value="{{old('descricao')}}">
        </div>
                    
        <button class="btn btn-lg btn-success">Salvar</button>
    </form>

</div>

   

@endsection



