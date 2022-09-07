@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">

          <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Campo de Experiências</th>
                  <th scope="col">Faixas Etárias</th>
                  <th scope="col">Código</th>
                  <th scope="col">Objetivos de aprendizagem e desenvolvimento</th>
                  <th scope="col">Abordagem das experiências de aprendizagem</th>
                  <th scope="col">Sugestões para o currículo</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>   
                <a href="{{ route('fichas.create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Adicionar</a>
                  @foreach($fichas as $ficha)     
                      <tr>                
                          <td>{{ $ficha->campo }}</td>
                          <td>{{ $ficha->faixas }}</td>
                          <td>{{ $ficha->codigo }}</td>
                          <td>{{ $ficha->objetivos }}</td>
                          <td>{{ $ficha->abordagem }}</td>
                          <td>{{ $ficha->sugestoes }}</td>
                          <td>

                            <div class="btn-group">
                              <form action="{{route('fichas.edit', [$ficha->id])}}" method="post">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-warning">Editar</button>              
                              </form>            
                              
                                <form action="{{route('fichas.destroy', [$ficha->id])}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger" style="margin-left: 10px;" onclick="return confirm('Deseja remover a ficha?')">Remover</button>
                                </form>
                            </div>                            
                        
                          </td>
                      </tr>
                  @endforeach
              </tbody>
            </table>

      </div>
    </div>
  </div>

@endsection