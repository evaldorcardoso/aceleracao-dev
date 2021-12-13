<link rel="stylesheet" href="{{asset('css/app.css')}}">
<h1 class="text-center">Cadastrar novo Documento:</h1>
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
<form action="{{route('documentos.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" name="titulo" value="{{old('titulo')}}">
    </div>
    <div class="form-group">
        <label for="tamanho">Tamanho(Mb)</label>
        <input type="number" name="tamanho" value="{{old('tamanho')}}">
    </div>        
    <div class="form-group">
        <label for="num_assinaturas">Número de Assinaturas</label>
        <input type="number" name="num_assinaturas" value="{{old('num_assinaturas')}}">
    </div>
    <div class="form-group">
        <label for="assinatura_responsavel">Assinatura do Responsável</label>
        <input type="text" name="assinatura_responsavel" value="{{old('assinatura_responsavel')}}">
    </div>
    <div class="form-group">
        <label for="qtd_paginas">Quantidade de Páginas</label>
        <input type="number" name="qtd_paginas" value="{{old('qtd_paginas')}}">
    </div>
    <button type="submit">Cadastrar</button>
    <a href="{{route('perfil')}}">Voltar</a>    
</form>