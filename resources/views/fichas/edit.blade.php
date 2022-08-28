@extends('layouts.app')

@section('content')

<form action="{{route('fichas.update')}}" method="post">

    @csrf

    <div class="form-group">
        <label>Competência</label>
        <input type="text" name="competencia" class="form-control" value="{{ $ficha->competencia }}">
    </div>

    <div class="form-group">
        <label>Código</label>
            <input type="text" name="codigo" class="form-control" value="{{ $ficha->codigo }}">
    </div>
        
    <div class="form-group">
        <label>Descrição</label>
        <textarea name="descricao" id="" cols="30" rows="10" class="form-control">{{ $ficha->descricao }}</textarea>
    </div>
        
    <button class="btn btn-lg btn-success">Atualizar</button>
 </form>

@endsection



