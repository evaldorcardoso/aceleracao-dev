<link rel="stylesheet" href="{{asset('css/app.css')}}">
<div class="text-center">
    <h1>{{$documento['titulo']}}</h1>
    <p>Tamanho: {{$documento['tamanho']}}</p>
    <p>Número de Assinaturas: {{$documento['num_assinaturas']}}</p>
    <p>Assinatura Responsável: '{{$documento['assinatura_responsavel']}}'</p>
    <p>Quantidade de Páginas: {{$documento['qtd_paginas']}}</p>
    <p>Criado em: {{$documento['created_at']}}</p>
    <p>Atualizado em: {{$documento['updated_at']}}</p>
    <br>
    <form action="{{route('documentos.destroy', $documento['id'])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
    <br>
    <a href="{{route('perfil')}}">Voltar</a>
</div>