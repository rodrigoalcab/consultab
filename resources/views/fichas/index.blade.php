@extends('layouts.app')

@section('content')

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Competência</th>
        <th scope="col">Código</th>
        <th scope="col">Descrição</th>
      </tr>
    </thead>
    <tbody>   
        @foreach($fichas as $ficha)     
            <tr>                
                <td>{{ $ficha->competencia }}</td>
                <td>{{ $ficha->codigo }}</td>
                <td>{{ $ficha->descricao }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection