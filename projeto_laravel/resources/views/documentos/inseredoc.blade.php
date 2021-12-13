<h1>Cadastrar novo Documento:</h1>
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
        <input type="text" name="titulo">
    </div>
    <div class="form-group">
        <label for="tamanho">Tamanho(Kb)</label>
        <input type="number" name="tamanho">
    </div>        
    <div class="form-group">
        <label for="num_assinaturas">Número de Assinaturas</label>
        <input type="number" name="num_assinaturas">
    </div>
    <div class="form-group">
        <label for="assinatura_responsavel">Assinatura do Responsável</label>
        <input type="text" name="assinatura_responsavel">
    </div>
    <div class="form-group">
        <label for="qtd_paginas">Quantidade de Páginas</label>
        <input type="number" name="qtd_paginas">
    </div>
    <button type="submit">Cadastrar</button>
    <a href="{{route('perfil')}}">Voltar</a>    
</form>
<style>
    h1{
        text-align: center;
    }
    form {
        width: 500px;
        margin: 0 auto;
    }
    .form-group {
        margin-bottom: 20px;
        display: grid;
    }
    .alert{
        width: 500px;
        border-radius: 5px;
        margin: 20px auto; 
        padding: 10px;       
    }
    .alert-danger{
        background-color: #e24141;
    }
    .alert-success{
        background-color: #4caf50;
    }
    .alert ul{
        text-align: center;
        list-style: none;
    }
    .alert ul li{
        margin-left: -40px;
        color: #fff;
    }
    .alert h3{
        color: #fff;
        text-align: center;
    }
</style>