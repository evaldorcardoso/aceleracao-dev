<?php
    $json = file_get_contents("https://jsonplaceholder.typicode.com/posts");
    $array = json_decode($json);
    var_export($array);
?>