<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Perfil do Usuário e Documentos</title>
</head>
<body>
  <h1>Olá {{ $usuarios['nome'] }} </h1>
  <h2>Sua idade é {{ $usuarios['idade'] }} anos!</h2>
  <br>
  <h2>Estes são os seus documentos:</h2>
  <a href={{route('documentos.create')}}>Novo Documento</a>
  <br>
  @if(session('success'))
  <div class="alert alert-success">
    <h3>Tudo certo!</h3>
    <ul>        
        <li>{{session('success')}}</li>
    </ul>
  </div>
  @endif
  <br>
  <table>
      <tr>
          <th>Título</th>
          <th>Tamanho(Mb)</th>
          <th>Número de Assinaturas</th>
          <th>Assinatura Responsável</th>
          <th>Páginas</th>
          <th>Ações</th>
        </tr>
  @foreach($documentos as $documento)
      <tr>
        <th>{{ $documento['titulo'] }}</th>
        <th>{{ $documento['tamanho'] }}Mb</th>
        <th>{{ $documento['num_assinaturas'] }}</th>
        <th>{{ $documento['assinatura_responsavel'] }}</th>
        <th>{{ $documento['qtd_paginas'] }}</th>
        <th><a href={{route('documentos.show', $documento['id'])}}>Exibir Documento</a></th>
      </tr>
  @endforeach
  </table>
  <br><br>
  <a href={{route('home')}}>Voltar para o Início</a>
</body>
</html>
