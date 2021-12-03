<?php
    interface Saida{
        public function imprimir($conteudo);
    }

    class ArrayToJson implements Saida{
        public function imprimir($conteudo){
            echo json_encode($conteudo);
        }
    }

    class ArrayToXml implements Saida{
        public function imprimir($conteudo){
            echo "<?xml version='1.0' encoding='UTF-8'?>";
            echo "<dados>";
            foreach($conteudo as $key => $value){
                echo "<$key>$value</$key>";
            }
            echo "</dados>";
        }
    }

    class ArrayToCsv implements Saida{
        public function imprimir($conteudo){
            $csv = "";
            foreach($conteudo as $key => $value){
                $csv .= "$key;$value\n";
            }
            echo $csv;
        }
    }

    class ClienteTransfer{
        private $cliente;

        public function __construct($conteudo, Saida $cliente){
            $this->cliente = $cliente;
            $this->cliente->imprimir($conteudo);
        }
    }

    $cliente = new ClienteTransfer(["nome" => "João", "idade" => "20"], new ArrayToJson());
    echo '<br><hr>';
    $cliente = new ClienteTransfer(["nome" => "João", "idade" => "20"], new ArrayToXml());
    echo '<br><hr>';
    $cliente = new ClienteTransfer(["nome" => "João", "idade" => "20"], new ArrayToCsv());