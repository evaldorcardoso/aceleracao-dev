<?php
    function pegaClasses($nomeClasse){
        require_once("classes".DIRECTORY_SEPARATOR."{$nomeClasse}.php");
    }

    spl_autoload_register("pegaClasses");