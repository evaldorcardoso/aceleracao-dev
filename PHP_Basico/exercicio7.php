<?php
    /**
     * Crie um script php capaz de ler 3 notas de
     *um aluno e seu nome, depois calcule a média final deste aluno, considerando que a
     *média é ponderada, ou seja, o peso das notas são, respectivamente, 2, 3 e 5. Exiba seu
     *nome e a média final;
     *Ex.: http://localhost/aceleracao_php/exercicio7.php?nome=João&nota1=10&nota2=5&nota3=7
     */    
    $nome = $_GET['nome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $media = ($nota1 * 2 + $nota2 * 3 + $nota3 * 5) / 10;
    echo "O aluno $nome tem a média final de $media";
?>