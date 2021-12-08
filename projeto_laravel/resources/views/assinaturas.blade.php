<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assinaturas</title>
</head>
<body>
    <h1>Assinaturas:</h1>
    <table>
        <tr>
            <th>Assinatura</th>
            <th>Quantidade de Caracteres</th>
            <th>Usada quantas vezes?</th>
            <th>Ações</th>
          </tr>
    @foreach($assinaturas as $assinatura)
        <tr>
          <th>{{ $assinatura['assinatura_padrao'] }}</th>
          <th>{{ $assinatura['qtd_caracteres'] }}</th>
          <th>{{ $assinatura['assinatura_usada_x_vezes'] }}</th>
          <th><a href={{route('assinaturas.show', $assinatura['id'])}}>Exibir assinatura</a></th>
        </tr>
    @endforeach
    </table>
    <br><br>
    <a href={{route('home')}}>Voltar para o Início</a>
</body>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
</style>
</html>