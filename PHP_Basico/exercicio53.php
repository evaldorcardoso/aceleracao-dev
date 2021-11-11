<?php
    $n1 = array("João" => "5", 
                "Maria" => "2", 
                "José" => "9", 
                "Pedro" => "5",
                "Ana" => "2", 
                "Rebeca" => "9", 
                "Rafael" => "8", 
                "Sofia" => "10",
                "Daniel" => "7",
                "Fernanda" => "2",
                "Luis" => "5",
                "Carla" => "9",
                "Marcos" => "2",
                "Mariana" => "10",
                "Lorena" => "2",
                "Larissa" => "10");
    $n2 = array("João" => "10", 
                "Maria" => "5", 
                "José" => "2", 
                "Pedro" => "8",
                "Ana" => "3", 
                "Rebeca" => "2", 
                "Rafael" => "8", 
                "Sofia" => "10",
                "Daniel" => "7",
                "Fernanda" => "5",
                "Luis" => "5",
                "Carla" => "9",
                "Marcos" => "8",
                "Mariana" => "10",
                "Lorena" => "3",
                "Larissa" => "9");

    function alunoAprovado($n1, $n2){
        $retorno = false;
        if(($n1>7)&&($n2>7)){
            if($n1+$n2 > 14){
                $retorno = true;
            }
        }
        return $retorno;
    }

    foreach($n1 as $key => $value){
        if(alunoAprovado($n1[$key], $n2[$key])){
            $arquivo = fopen("alunos-aprovados.txt", "a");
            fwrite($arquivo, $key."\n");
            fclose($arquivo);
        }
    }
        
    
    