<?php 
require_once 'Conta.php';
require_once 'ContaCorrente.php';
require_once 'ContaPoupanca.php';
require_once 'Abstrato.php';
$conta1 = new ContaPoupanca('4002','8922',500);
print_r ($conta1);
print '<br>';
$conta1->adicionarDinheiro(200); 
print '<br>';
print ($conta1->getSaldo());
print '<br>';


$conta2 = new ContaCorrente('4004','8222',1000,500);
$conta2->retirar(200);
print '<br>';


$conta3 = new ContaPoupanca('4200','522',799);
$conta3-> retirarPoupanca(200);
print ($conta3->getSaldo());




$estudante1 = new ContaSalarioUniversitario('123','456',999);

$estudante1->retirar(100);
?>