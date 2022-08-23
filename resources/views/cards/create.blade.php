<form action="{{route('cards.store')}}" method="post">

    @csrf

    <div class="form-group">
        <label>Titulo</label>
        <input type="text" name="titulo" class="form-control" value="{{old('titulo')}}">
    </div>

    <div class="form-group">
        <label>Código</label>
            <input type="text" name="codigo" class="form-control" value="{{old('codigo')}}">
    </div>
        
    <div class="form-group">
        <label>Descrição</label>
        <textarea name="descricao" id="" cols="30" rows="10" class="form-control" value="{{old('descricao')}}"></textarea>
    </div>
        
    <button class="btn btn-lg btn-success">Criar Card</button>
 </form>