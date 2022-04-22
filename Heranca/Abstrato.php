<?php
    require_once 'Conta.php';

    class ContaSalarioUniversitario extends Conta{
        function retirar($quantia){
            $this->saldo -= $quantia;
            print  '<br>';
            print_r("Seu saldo é {$this->getSaldo()}");
        }
    }

