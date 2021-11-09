<?php
    function retornaNome($nome){        
        if(empty($nome)||is_null($nome)){
            throw new Exception("Nome não pode ser vazio nem nulo");
        }
        echo '<p>O nome informado foi: '.$nome.'</p>';
    }

    //Quando for exibir a informação da exceção no catch dê um retorno usando o formato json como resposta.
    try{
        retornaNome("Evaldo");
        retornaNome("");
    }catch(Exception $e){
        $erro[] = "Código do erro: " . $e->getCode();
        $erro[] = "Mensagem: " . $e->getMessage();
        $erro[] = "Arquivo: " . $e->getFile();
        $erro[] = "Linha: " . $e->getLine();
        echo json_encode($erro, true);
    }finally{
        echo "Executou o finally";
    }
    