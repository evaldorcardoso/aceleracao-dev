<?php   
    $urls = array('https://random-data-api.com/api/stripe/random_stripe',
                'https://random-data-api.com/api/stripe/random_stripe',
                'https://random-data-api.com/api/app/random_app',
                'https://random-data-api.com/api/beer/random_beer',
                'https://random-data-api.com/api/commerce/random_commerce',
                'https://random-data-api.com/api/device/random_device',
                'https://random-data-api.com/api/subscription/random_subscription');
    foreach ($urls as $url) {
        $json = file_get_contents($url);
        $arquivo = fopen('api.txt', 'a');
        fwrite($arquivo, $json."\r\n");
        fclose($arquivo);
    }
    $finalArray = array();
    $arquivo = file('api.txt');
    foreach ($arquivo as $linha) {
        $json = json_decode($linha, true);
        array_push($finalArray, $json);
    }
    var_export($finalArray);
?>