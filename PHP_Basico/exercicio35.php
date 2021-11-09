<?php
    require_once 'funcoesImpostoRenda.php';
    
    $contribuintes = array(
        array(
            "nome" => "João",
            "cpf" => "123.456.789-10",
            "dependentes" => 2,
            "renda" => 1000
        ),
        array(
            "nome" => "Maria",
            "cpf" => "987.654.321-09",
            "dependentes" => 0,
            "renda" => 5000
        ),
        array(
            "nome" => "Pedro",
            "cpf" => "654.321.987-05",
            "dependentes" => 1,
            "renda" => 3000
        )
    );

    
    $salarioMinimo = 1000;
    calcularImposto($contribuintes, $salarioMinimo);
    
?>

