@extends('layouts.app')

@section('content')

<div class="container">

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Descrição</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>   
      <a href="{{ route('campos.create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Adicionar</a>
        @foreach($campos as $campo)     
            <tr>                
                <td>{{ $campo->descricao }}</td>
                <td>

                  <div class="btn-group" role="group" aria-label="Basic example">

                    <form action="{{route('campos.edit', [$campo->id])}}" method="post" style="display: inline;">
                      @csrf
                      @method('GET')
                      <button type="submit" class="btn btn-warning">Editar</button>              
                    </form>            
                    
                      <form action="{{route('campos.destroy', [$campo->id])}}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="margin-left: 10px;" onclick="return confirm('Deseja remover o campo?')">Remover</button>
                      </form>
                      
                    </div>
              
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

</div>

  

@endsection