<?php
    class Gerente{
        public int $id;
        public String $nome;
        public String $alocacao;
        public float $salario;
        public int $quantidadeDeSubordinados;

        public function __construct($id = NULL, $nome = NULL, $alocacao = NULL, $salario = NULL, $quantidadeDeSubordinados = NULL){
            $this->id = $id;
            $this->nome = $nome;
            $this->alocacao = $alocacao;
            $this->salario = $salario;
            $this->quantidadeDeSubordinados = $quantidadeDeSubordinados;
        }

        public function __destruct(){
            // echo "Objeto destruido";
        }

        public function __toString(){
            return json_encode(array(
                "id" => $this->id,
                "nome" => $this->nome,
                "alocacao" => $this->alocacao,
                "salario" => $this->salario,
                "quantidadeDeSubordinados" => $this->quantidadeDeSubordinados
            ));
        }

        //Crie Gets e Set’s da classe
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getAlocacao(){
            return $this->alocacao;
        }

        public function setAlocacao($alocacao){
            $this->alocacao = $alocacao;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function setSalario($salario){
            $this->salario = $salario;
        }

        public function getQuantidadeDeSubordinados(){
            return $this->quantidadeDeSubordinados;
        }

        public function setQuantidadeDeSubordinados($quantidadeDeSubordinados){
            $this->quantidadeDeSubordinados = $quantidadeDeSubordinados;
        }

        public function getSubordinados(){
            return $this->subordinados;
        }

        public function setSubordinados($subordinados){
            $this->subordinados = $subordinados;
        }

        public function insereGerente(Gerente $gerente){
            $arquivo = fopen("gerentes.txt", "c+");
            $gerentes = file_get_contents("gerentes.txt");
            $gerentes = json_decode($gerentes, true);
            $gerentes[] = $gerente;
            $objeto = json_encode($gerentes);                        
            fwrite($arquivo, $objeto);
            fclose($arquivo);
            $gerente = (array) $gerente;
            foreach($gerente as $key => $value){                
                echo $value . ", ";
            }
            echo '<br>Gerente gravado!<hr><br>';            
        }

        public function listaGerentes(){
            echo "<hr><p>";
            $arquivo = fopen("gerentes.txt", "r");
            while(!feof($arquivo)){
                $gerente = fgets($arquivo);                
                $gerente = json_decode($gerente);
                var_export($gerente);
            }
            fclose($arquivo);
        }
    }

    $gerente = new Gerente(1, "João", "Recursos Humanos", 2000, 2);
    $gerente2 = new Gerente(2, "Maria", "Recursos Humanos", 4500, 5);
    $gerente->insereGerente($gerente);
    $gerente->insereGerente($gerente2);
    $gerente->listaGerentes();