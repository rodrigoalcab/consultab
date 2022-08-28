@extends('layouts.app')

@section('content')

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Competência</th>
        <th scope="col">Código</th>
        <th scope="col">Descrição</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>   
      <a href="{{ route('fichas.create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Adicionar</a>
        @foreach($fichas as $ficha)     
            <tr>                
                <td>{{ $ficha->competencia }}</td>
                <td>{{ $ficha->codigo }}</td>
                <td>{{ $ficha->descricao }}</td>
                <td>

                  <form action="{{route('fichas.edit', [$ficha->id])}}" method="post" style="display: inline;">
                    @csrf
                    @method('GET')
                    <button type="submit" class="btn btn-warning">Editar</button>              
                  </form>
                  
                  
                  
                    <form action="{{route('fichas.destroy', [$ficha->id])}}" method="post" style="display: inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Deseja remover a ficha?')">Remover</button>
                    </form>
              
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection