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
      <a href="{{ route('fichas.create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>
        @foreach($fichas as $ficha)     
            <tr>                
                <td>{{ $ficha->competencia }}</td>
                <td>{{ $ficha->codigo }}</td>
                <td>{{ $ficha->descricao }}</td>
                <td>{{ $ficha->descricao }}</td>
                <td>
                  <button type="button" class="btn btn-warning">Editar</button>
                  <button type="button" class="btn btn-danger">Remover</button>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection