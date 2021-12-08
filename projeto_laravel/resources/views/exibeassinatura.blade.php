<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exibindo Assinatura {{$assinatura['assinatura_padrao']}}</title>
</head>
<body>
    <h1>{{$assinatura['assinatura_padrao']}}</h1>
    <p>Quantidade de Caracteres: {{$assinatura['qtd_caracteres']}}</p>
    <p>Usada quantas vezes? {{$assinatura['assinatura_usada_x_vezes']}}</p>
    <p>Criado em: {{$assinatura['created_at']}}</p>
    <p>Atualizado em: {{$assinatura['updated_at']}}</p>
    <br><br>
    <a href="{{route('assinaturas.index')}}">Voltar</a>
</body>
</html>
