<?php 
    class Pessoa {
        private $nome;
        private $rua;
        private $nascimento;

        public function __construct($nome,$rua){
            $this-> nome= $nome;
            $this-> rua= $rua;
        }
       
        public function setNascimento($nascimento){
            $partes = explode ('-',$nascimento);
            if(count($partes) == 3){
                if (checkdate ($partes[1], $partes[2], $partes[0])) {
                    $this->nascimento = $nascimento;
                    return true;
                }
                return false;
            }
            return false;
        }
        
    }

    $pessoa1 = new Pessoa('Mateus Durães', 'Avenida Comercial');
    $ok1 = $pessoa1->setNascimento('20 de Setembro de 2000');
    $ok2 = $pessoa1->setNascimento('2000-09-20');
    echo '<pre>';
    var_dump($ok1);
    var_dump($ok2);
    var_dump($pessoa1);
    echo '</pre>';









?>