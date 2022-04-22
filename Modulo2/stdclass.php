<?php

// std class
$produto = new stdCLass;

$produto->descricao = 'Café';
$produto->estoque = 5;
$produto->preco = 3;


var_dump($produto);

// conversão de tipos (CASTING)
print '<br/>';
$vetor1= (array) $produto;
$vetor2 = ['descricao' => 'chocolate', 'estoque'=>100, 'preco'=>15];
$produto2 = (object) $vetor2;

print ($vetor1['descricao']);
print '<br/>';
print $produto2->descricao; 
print '<br/>';
print $produto2->estoque;
