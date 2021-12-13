<link rel="stylesheet" href="{{asset('css/app.css')}}">
<h1>Cadastrar nova Assinatura:</h1>
<hr>
@if($errors->any())
<div class="alert alert-danger">
    <h3>Ops, algo deu errado!</h3>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('assinaturas.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="titulo">Assinatura padrão</label>
        <input type="text" name="assinatura_padrao">
    </div>
    <div class="form-group">
        <label for="tamanho">Quantidade de Caracteres</label>
        <input type="number" name="qtd_caracteres">
    </div>        
    <div class="form-group">
        <label for="num_assinaturas">Usada quantas vezes?</label>
        <input type="number" name="assinatura_usada_x_vezes">
    </div>    
    <button type="submit">Cadastrar</button>
    <a href="{{route('assinaturas.index')}}">Voltar</a>    
</form>