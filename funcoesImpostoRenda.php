<?php
    function calcularImposto($contribuintes, $salarioMinimo) {
        foreach ($contribuintes as $contribuinte) {
            echo "<p>";
            echo "Nome: " . $contribuinte["nome"] . "<br>";
            echo "CPF: " . $contribuinte["cpf"] . "<br>";
            echo "Dependentes: " . $contribuinte["dependentes"] . "<br>";
            echo "Total de imposto: ".calcularImpostoContribuinte($contribuinte, $salarioMinimo);            
            echo "</p>";
        }
    }
    function calcularImpostoContribuinte($contribuinte, $salarioMinimo) {
        $imposto = 0;
        $dependentes = $contribuinte["dependentes"];
        $renda = $contribuinte["renda"];
        $imposto += calcularImpostoPorDependentes($dependentes, $salarioMinimo);
        $imposto += calcularImpostoPorRenda($renda, $salarioMinimo);
        if($imposto>0)
            return "R$ ${imposto}";
        else
            return "Isento";
    }
    function calcularImpostoPorDependentes($dependentes, $salarioMinimo) {
        $imposto = 0;
        if ($dependentes > 0) {
            $imposto -= $dependentes * $salarioMinimo * 0.05;
        }
        return $imposto;
    }
    function calcularImpostoPorRenda($renda, $salarioMinimo) {
        $imposto = 0;
        if ($renda <= 2 * $salarioMinimo) {
            $imposto += 0;
        } else if ($renda <= 3 * $salarioMinimo) {
            $imposto += $salarioMinimo * 0.05;
        } else if ($renda <= 5 * $salarioMinimo) {
            $imposto += $salarioMinimo * 0.1;
        }else {
            $imposto = 0;
        }
        return $imposto;
    }
?>