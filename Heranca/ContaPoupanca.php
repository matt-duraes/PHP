<?php 
class ContaPoupanca extends Conta {
    public function retirarPoupanca($quantia){
        if ($this->saldo >= $quantia){
            $this->saldo -= $quantia;
        } else {
            return false;
        }
        return true;
    }
}
?>