<?php
    $clientes = array("Joaquim" => "28,m", "Maria" => "41,f", "Pedro" => "18,m", 
                    "Joana Silva" => "58,f", "João Lopes" => "21,m", 
                    "Joana" => "15,f", "Fernanda" => "25,f");
    $homens = array();
    $mulheres = array();
    foreach ($clientes as $nome => $dados){
        $cliente = explode(",", $dados);
        echo "Nome: $nome, Idade: $cliente[0], Sexo: $cliente[1]<br>";

        if($cliente[1] == "m"){
            array_push($homens, array('Nome' => $nome, 'Idade' => $cliente[0], 'Sexo' => $cliente[1]));
        }
        if($cliente[1] == 'f'){
            array_push($mulheres, array('Nome' => $nome, 'Idade' => $cliente[0], 'Sexo' => $cliente[1]));
        }
    }
    echo "<hr>";
    echo "Homens: <br>";
    foreach ($homens as $h){
        echo "Nome: $h[Nome], Idade: $h[Idade], Sexo: $h[Sexo]<br>";
    }
    echo "<hr>";
    echo "Mulheres: <br>";
    foreach ($mulheres as $m){
        echo "Nome: $m[Nome], Idade: $m[Idade], Sexo: $m[Sexo]<br>";
    }
?>
