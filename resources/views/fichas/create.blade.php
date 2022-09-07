@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <form action="{{route('fichas.store')}}" method="post">

                @csrf

                <div class="form-group">
                    <label>Campo de Experiências</label>
                    <input type="text" name="campo" class="form-control" value="{{old('campo')}}">
                </div>

                <div class="form-group">
                    <label>Faixas Etárias</label>
                    <input type="text" name="faixas" class="form-control" value="{{old('faixas')}}">
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
                    
                <button class="btn btn-lg btn-success">Salvar</button>
            </form>

        </div>
    </div>
</div>



@endsection



