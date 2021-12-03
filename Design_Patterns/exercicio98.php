<?php
    interface IPagamento{
        function pagar($valor);
    }

    class PaypalAdapter implements IPagamento{
        private $pagamento;

        public function __construct(Paypal $pagamento){
            $this->pagamento = $pagamento;
        }

        public function pagar($valor){
            $this->pagamento->payAmount($valor);
        }
    }
    
    class Paypal {
        public function __construct(){
            // your code here
        }

        public function payAmount($amount){
            // Paying via Paypal
            echo "Paying via Paypal: ".$amount;
        }
    }

    $paypal = new PaypalAdapter(new Paypal());
    $paypal->pagar(2629);

