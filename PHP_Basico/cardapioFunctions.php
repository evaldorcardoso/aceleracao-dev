<?php
    function adicionaItem($categoria,$item) {
        global $salgados;
        global $refrigerantes;
        global $acompanhamentos;
        switch($categoria) {
            case "salgados":                
                $salgados[] = $item;
                break;
            case "refrigerantes":
                $refrigerantes[] = $item;
                break;
            case "acompanhamentos":
                $acompanhamentos[] = $item;
                break;
        }
    }

    function retornaCategoria($categoria) {
        global $salgados;
        global $refrigerantes;
        global $acompanhamentos;
        switch($categoria) {
            case "salgados":
                return $salgados;
                break;
            case "refrigerantes":
                return $refrigerantes;
                break;
            case "acompanhamentos":
                return $acompanhamentos;
                break;
        }
    }

    function verificaCardapio($categoria){
        $totalItens = count(retornaCategoria($categoria));
        if($totalItens<3)
            echo "*ATENÇÃO: O Cardápio {$categoria} está abaixo da quantidade mínima";
        else if($totalItens>6)
            echo "*ERRO O Cardápio {$categoria} está acima da quantidade máxima";
        else
            echo "O Cardápio \"${categoria}\" contém ${totalItens} itens";
    }

    function mostraCardapio($categoria){
        echo '<br>';
        var_export(retornaCategoria($categoria));
    }