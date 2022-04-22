<?php 
 abstract class Conta {
       protected $agencia;
       protected $conta;
       protected $saldo;


       public function __construct($agencia,$conta,$saldo){
           $this->agencia = $agencia;
           $this->conta = $conta;
            if ($saldo>0){
                $this->saldo = $saldo;
            }
       }
       public function getSaldo(){
           return $this->saldo;
       }
       public function adicionarDinheiro($quantia){
            if($quantia > 0 ){
                $this->saldo += $quantia;
                print_r ("Adicionamos {$quantia} em sua conta");
            }
       }
       
  }

?>