<?php
    $salgados = array("Pão", "Pizza", "Coxinha");
    $refrigerantes = array("Coca", "Guaraná");
    $acompanhamentos = array("Batatas Fritas", "Ovo", "Queijo", "Mostarda", "Ketchup", "Maionese");
    require_once("cardapioFunctions.php");    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Online</title>
</head>
<body>
    <br>
    <h1>Seja bem-vindo ao sistema de Cardápios!</h1>
    <form action="" method="post" style="margin-bottom: 100px">
        <p>
            <label for="">Informe o item para adicionar:</label><br>
            <input name="item" type="text" placeholder="Informe o item para adicionar">
        </p>
        <p>
            <label for="">Escolha a categoria do item:</label><br>
            <select name="categoria" id="categoria">
                <option value="salgados">Salgados</option>
                <option value="refrigerantes">Refrigerantes</option>
                <option value="acompanhamentos">Acompanhamentos</option>
            </select>
        </p>
        <input type="submit" value="Adicionar">
    </form>
    <?php
        if(isset($_POST['item'])&&(isset($_POST['categoria']))){
            $item = $_POST['item'];
            $categoria = $_POST['categoria'];
            adicionaItem($categoria, $item);
        }
    ?>
    <h2>Salgados:</h2>
    <?php
        verificaCardapio('salgados');
        mostraCardapio('salgados');
    ?>
    <h2>Refrigerantes:</h2>
    <?php
        verificaCardapio('refrigerantes');
        mostraCardapio('refrigerantes');
    ?>
    <h2>Acompanhamentos:</h2>
    <?php
        verificaCardapio('acompanhamentos');
        mostraCardapio('acompanhamentos');
    ?>
</body>
</html>
    