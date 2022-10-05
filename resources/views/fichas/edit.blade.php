@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('fichas.update', [$ficha->id])}}" method="post">

        @csrf
        @method("PUT")

        <div class="form-group">
            <label>Campo de Experiências</label>
            <select name="campo_id" id="" class="form-select" value="{{old('campo')}}">
                <?php foreach($campos as $campo) { ?>  
                    <option value="<?php echo $campo->id; ?>" <?php if($ficha->campo_id == $campo->id) {
                        echo "selected"; } ?> >                        
                        <?php echo $campo["descricao"]; ?></option>
                <?php } ?>            
            </select>
        </div>

        <div class="form-group">
            <label>Faixa Etária</label>
            <select name="faixa_id" id="" class="form-select" value="{{old('faixas')}}">
                <?php foreach($faixas as $faixa) { ?>  
                    <option value="<?php echo $faixa->id; ?>" <?php if($ficha->faixa_id == $faixa->id) {
                        echo "selected"; } ?> >                        
                        <?php echo $faixa["descricao"]; ?></option>
                <?php } ?>         
            </select>
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

        <div class="form-group">
            <label>Recurso</label>
                <input type="text" name="recurso" class="form-control" value="{{ $ficha->recurso }}">
        </div>

        <div class="form-group">
            <label>Link do Recurso</label>
                <input type="text" name="link_recurso" class="form-control" value="{{ $ficha->link_recurso }}">
        </div>

        <div class="form-group">
            <label>Propaganda</label>
                <input type="text" name="propaganda" class="form-control" value="{{ $ficha->propaganda }}">
        </div>

        <div class="form-group">
            <label>Link da Propaganda</label>
                <input type="text" name="link_propaganda" class="form-control" value="{{ $ficha->link_propaganda }}">
        </div>
            
        <button class="btn btn-lg btn-success">Atualizar</button>
     </form>

</div>



@endsection



