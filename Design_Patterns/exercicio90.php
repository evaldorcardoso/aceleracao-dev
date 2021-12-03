<?php
    class Logs{
        private static $instancia;

        private function __construct(){}

        private function __clone(){}

        public static function getInstancia(){
            if(self::$instancia==null){
                self::$instancia = new self;
            }
            return self::$instancia;
        }

        public function escreverLog($diretorio){
            $agora = date('Y-m-d-H:i:s');
            $nomeLog = 'log-'.$agora.'.txt';
            if(!file_exists($diretorio))
                mkdir($diretorio, 777, true);
            $arquivo = fopen($diretorio.DIRECTORY_SEPARATOR.$nomeLog, 'w');
            fwrite($arquivo, 'Arquivo criado em '.$agora);
            fclose($arquivo);
        }
        public function buscarLog($diretorio) {
            echo '<hr>';
            echo "<p>Arquivos na pasta '{$diretorio}':</p>";
            $diretorio = dir($diretorio);
            while($arquivo = $diretorio->read()){
                if(($arquivo != '..')&&($arquivo != '.')){
                    print_r(self::exibirLog($arquivo));
                    echo '<br>';
                }
            }
        }
        public static function exibirLog($arquivo){
            return pathinfo($arquivo);
        }
    }

$log1 = Logs::getInstancia();
$log1->escreverLog('1');
sleep(1);
$log1->buscarLog('1');
$log2 = Logs::getInstancia();
$log2->escreverLog('2');
sleep(2);
$log2->buscarLog('2');
$log3 = Logs::getInstancia();
$log3->escreverLog('3');
sleep(1);
$log3->buscarLog('3');
$log4 = Logs::getInstancia();
$log4->escreverLog('4');
sleep(2);
$log4->buscarLog('4');
$log5 = Logs::getInstancia();
$log5->escreverLog('5');
$log5->buscarLog('5');
