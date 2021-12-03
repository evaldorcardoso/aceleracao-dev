<?php
    interface IMetodoEnvio{
        public function enviar($mensagem);
    }

    class Email implements IMetodoEnvio
    {
        public function enviar($mensagem)
        {
            echo "Enviando email: $mensagem";
        }
    }

    class Notificacao
    {
        private $mensagem;

        public function __construct(IMetodoEnvio $email)
        {
            $this->mensagem = $email;
        }

        public function enviar($mensagem)
        {
            $this->mensagem->enviar($mensagem);
        }
    }

    $notificacao = new Notificacao(new Email());
    $notificacao->enviar("Olá, tudo bem?");