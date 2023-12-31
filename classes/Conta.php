<?php
    class Conta {
        //definindo os atributos das classes
        private $numero;
        private $agencia;
        private $proprietario;
        private $saldo;
        private $limite;
        
        public function __construct() {}

        public function create($_numero, $_agencia, $_proprietario, $_saldo, $_limite) {
            $this->numero = $_numero;
            $this->agencia = $_agencia;
            $this->proprietario = $_proprietario;
            $this->saldo = $_saldo;
            $this->limite = $_limite;
        }

        // Setters
        public function set_Numero($_numero)
        {
            $this->numero = $_numero;
        }

        public function set_Agencia($_agencia)
        {
            $this->agencia = $_agencia;
        }

        public function set_Proprietario($_proprietario)
        {
            $this->proprietario = $_proprietario;
        }

        public function set_Saldo($_saldo)
        {
            $this->saldo = $_saldo;
        }

        public function set_Limite($_limite)
        {
            $this->limite = $_limite;
        }

        //getters
        public function get_Numero() {
            return $this->numero;
        }

        public function get_Agencia() {
            return $this->agencia;
        }

        public function get_Proprietario() {
            return $this->proprietario;
        }

        public function get_Saldo() {
            return $this->saldo;
        }

        public function get_Limite() {
            return $this->limite;
        }

        //funções específicas da classe

        public function depositar($_valor) {
            $this->saldo += $_valor;
            echo "Você agora tem o saldo de $this->saldo";
        }

        public function sacar($_valor) {
            if ($this->saldo < $_valor) {
                echo "Você não possuo saldo o suficiente para sacar.";
            } else {
                $this->saldo -= $_valor;
                echo "Você acabou de sacar.";
            }
        }
    }
?>