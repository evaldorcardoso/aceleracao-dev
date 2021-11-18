<?php
    interface IClienteRepository{
        public function adicionarCliente(Cliente $cliente):Bool;
    }

    interface IClienteService{
        public function adicionarCliente(Cliente $cliente):String;
    }

    class Cliente{
        
        public function is_valid(){
            return true;
        }
    }

    Class ClienteRepository implements IClienteRepository{
        public function adicionarCliente(Cliente $cliente):Bool{
            return true;
        }
    }

    class ClienteService implements IClienteService{
        private IClienteRepository $clienteRepository;

        public function __construct(IClienteRepository $clienteRepository){
            $this->clienteRepository = $clienteRepository;
        }

        public function adicionarCliente(Cliente $cliente):String{
            if (!$cliente->is_valid()){
                return "Dados inválidos";
            }
            
            if($this->clienteRepository->adicionarCliente($cliente)){
                return "Cliente cadastrado com sucesso";
            }else{
                return "Error";
            }
        }
    }