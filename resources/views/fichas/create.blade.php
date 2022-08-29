@extends('layouts.app')

@section('content')

<form action="{{route('fichas.store')}}" method="post">

    @csrf

    <div class="form-group">
        <label>Campo de Experiências</label>
        <input type="text" name="campo" class="form-control" value="{{old('campo')}}">
    </div>

    <div class="form-group">
        <label>Faixas Etárias</label>
        <input type="text" name="competencia" class="form-control" value="{{old('faixas')}}">
    </div>

    <div class="form-group">
        <label>Código</label>
        <input type="text" name="objetivo" class="form-control" value="{{old('codigo')}}">
    </div>

    <div class="form-group">
        <label>Objetivos de aprendizagem e desenvolvimento</label>
            <input type="text" name="objetivo" class="form-control" value="{{old('codigo')}}">
    </div>
        
    <div class="form-group">
        <label>Descrição</label>
        <textarea name="descricao" id="" cols="30" rows="10" class="form-control" value="{{old('descricao')}}"></textarea>
    </div>
        
    <button class="btn btn-lg btn-success">Salvar</button>
 </form>

@endsection



