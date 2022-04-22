<?php 
    require_once 'Orçamento.php';
    require_once 'Produto.php';


    $orc = new Orcamento;
    $orc->adiciona(new Produto('Máquina de café',10,299),1);
    $orc->adiciona(new Produto('Chocolate',50,9),1);

    $orc->adiciona(new Produto('Leite',6,29),1);



?>