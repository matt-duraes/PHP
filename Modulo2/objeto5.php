<?php 
//CLASSE
    class Produto { 
    // ATRIBUTOS
        private $descricao; 
        private $estoque;
        private $preco;
    // MÉTODOS
        //EXECUTA ASSIM QUE UMA CLASSE É CRIADA 
        public function __construct($descricao,$estoque,$preco){
            $this->setDescricao($descricao);
            $this->setEstoque($estoque);
            $this->setPreco($preco);
        
        }
        
        public function setDescricao($descricao){
            if(is_string($descricao)){
                $this->descricao = $descricao;
            }
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function setEstoque($estoque){
            if(is_numeric($estoque)){
                $this->estoque= $estoque;
            }
        }
        public function getEstoque(){
            return $this->estoque;
        }
        public function setPreco($preco){
            if(is_numeric($preco)){
                $this-> preco = $preco;
            }
        }
        public function getPreco(){
            return $this->preco;
        }


        public function aumentarEstoque($maisEstoque){
           if(is_numeric($maisEstoque) and $maisEstoque >0){
               $this->estoque += $maisEstoque;
           }
        }
        public function diminuirEstoque($menosEstoque){
            if(is_numeric($menosEstoque) and $menosEstoque >0){
                $this->estoque -= $menosEstoque;
            }
        }
        /* executa após a execução dos objetos
        public function __destruct(){
            print('Programa finalizado');
        }
        */
    }
    $p1 = new Produto('Café',8,10);
    $p2 = new Produto('Chocolate', 3, 8);

    print_r(" O {$p1->getDescricao()} custa R$ {$p1->getPreco()} e temos {$p1->getEstoque()} unidades no estoque");
    print '<br/>';
    print_r(" O {$p2->getDescricao()} custa R$ {$p2->getPreco()} e temos {$p2->getEstoque()} unidades no estoque");


?>