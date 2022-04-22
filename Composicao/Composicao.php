<?php
require_once 'Caracteristicas.php';
require_once 'Produto.php';

$produto1 = new Produto ('Chocolate', 10,7);
$produto1 -> addCaracteristicas('Cor', 'Branco');
$produto1 -> addCaracteristicas('Peso', '500g');
/*
echo '<pre>';
print_r($produto1);
echo '</pre>';
*/
print 'Produto:'.$produto1->getDescricao();
print '<br>';
foreach($produto1->getCaracteristicas() as $caracteristica){
    $nome  = $caracteristica -> getNome();
    $valor = $caracteristica -> getValor();

    print " Característica {$nome} : {$valor} <br>";
} 



?>