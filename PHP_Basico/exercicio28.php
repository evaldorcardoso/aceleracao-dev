<?php
    $url = "https://servicodados.ibge.gov.br/api/v1/localidades/distritos";
    $json = file_get_contents($url);
    
    $obj = (object)json_decode($json, true);
    var_export($obj);
?>