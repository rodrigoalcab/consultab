@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{route('fichas.store')}}" method="post">

        @csrf

        <div class="form-group">
            <label>Campo de Experiências</label>
            <select name="campo_id" id="" class="form-select" value="{{old('campo')}}">
                @foreach ($campos as $campo)
                    <option value="{{ $campo->id }}">{{ $campo->descricao }}</option>
                @endforeach                
            </select>
        </div>

        <div class="form-group">
            <label>Faixa Etária</label>
            <select name="faixa_id" id="" class="form-select" value="{{old('faixas')}}">
                @foreach ($faixas as $faixa)
                    <option value="{{ $faixa->id }}">{{ $faixa->descricao }}</option>
                @endforeach                
            </select>
        </div>

        <div class="form-group">
            <label>Código</label>
            <input type="text" name="codigo" class="form-control" value="{{old('codigo')}}">
        </div>

        <div class="form-group">
            <label>Objetivos de aprendizagem e desenvolvimento</label>
                <input type="text" name="objetivos" class="form-control" value="{{old('objetivos')}}">
        </div>
            
        <div class="form-group">
            <label>Abordagem das experiências de aprendizagem</label>
            <textarea name="abordagem" id="" cols="30" rows="5" class="form-control" value="{{old('abordagem')}}"></textarea>
        </div>

        <div class="form-group">
            <label>Sugestões para o currículo</label>
            <textarea name="sugestoes" id="" cols="30" rows="5" class="form-control" value="{{old('sugestoes')}}"></textarea>
        </div>

        <div class="form-group">
            <label>Recurso</label>
                <input type="text" name="recurso" class="form-control" value="{{old('recurso')}}">
        </div>

        <div class="form-group">
            <label>Link do Recurso</label>
                <input type="text" name="link_recurso" class="form-control" value="{{old('link_recurso')}}">
        </div>

        <div class="form-group">
            <label>Propaganda</label>
                <input type="text" name="propaganda" class="form-control" value="{{old('propaganda')}}">
        </div>

        <div class="form-group">
            <label>Link da Propaganda</label>
                <input type="text" name="link_propaganda" class="form-control" value="{{old('link_propaganda')}}">
        </div>
            
        <button class="btn btn-lg btn-success">Salvar</button>
    </form>

</div>

   

@endsection



