<?php 

require_once 'Fabricante.php';
require_once 'Produto.php';

$produto1 = new Produto('Café', 5, 2);
$fabricante = new Fabricante('Sítio MG', 'Avenida comercial','073');

$produto1->setFabricante($fabricante);

$descricao = $produto1->getDescricao();
$nomeFabrica = $produto1->getFabricante()->getNome();

print_r("O fabricante do produto {$descricao} é {$nomeFabrica}");