<?php
    function pegaClasse($nomeClasse){
        require_once("Classes". DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }

    spl_autoload_register("pegaClasse");
?>