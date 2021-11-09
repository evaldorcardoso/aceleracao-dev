<?php
    $url = "https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes";
    $json = file_get_contents($url);
    
    $obj = json_decode($json);
    var_export($obj);
?>