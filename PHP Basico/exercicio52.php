<?php
    $array1 = array(1,5,98,34,-67,5,43,-345,678,90,88,907,-567,396,157,-346,54,83,80,66);
    $array2 = array(-897,654,54,39,-6,2,87,-632,743,690,-29,38,56,826,-64,74,-98,24,-22,38);

    function soma($v1, $v2){
        $soma = $v1 + $v2;
        if($soma<0) return 0;
        return $soma;
    }

    for($i=0; $i<20; $i++){
        $arquivo = fopen("arrays.txt", "a");
        fwrite($arquivo, $array1[$i]." , ".$array2[$i]." = ".soma($array1[$i], $array2[$i])."\r\n");
        fclose($arquivo);
    }
?>
