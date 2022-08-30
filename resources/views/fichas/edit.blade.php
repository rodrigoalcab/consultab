@extends('layouts.app')

@section('content')

<form action="{{route('fichas.update', [$ficha->id])}}" method="post">

    @csrf
    @method("PUT")

    <div class="form-group">
        <label>Campo de Experiências</label>
        <input type="text" name="campo" class="form-control" value="{{ $ficha->campo }}">
    </div>

    <div class="form-group">
        <label>Faixas Etárias</label>
        <input type="text" name="faixas" class="form-control" value="{{ $ficha->faixas }}">
    </div>

    <div class="form-group">
        <label>Código</label>
        <input type="text" name="codigo" class="form-control" value="{{ $ficha->codigo }}">
    </div>

    <div class="form-group">
        <label>Objetivos de aprendizagem e desenvolvimento</label>
            <input type="text" name="objetivos" class="form-control" value="{{ $ficha->objetivos }}">
    </div>
        
    <div class="form-group">
        <label>Abordagem das experiências de aprendizagem</label>
        <textarea name="abordagem" id="" cols="30" rows="5" class="form-control">{{ $ficha->abordagem }}</textarea>
    </div>

    <div class="form-group">
        <label>Sugestões para o currículo</label>
        <textarea name="sugestoes" id="" cols="30" rows="5" class="form-control">{{ $ficha->sugestoes }}</textarea>
    </div>
        
    <button class="btn btn-lg btn-success">Atualizar</button>
 </form>

@endsection



