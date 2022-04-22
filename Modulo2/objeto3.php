<?php 
//CLASSE
    class Produto { 
    // ATRIBUTOS
        private $descricao; 
        private $estoque;
        private $preco;
    // MÉTODOS
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
    }
    $p1 = new Produto;

    $p1->setDescricao('Café');
    $p1->setEstoque(5);
    $p1->setPreco(10);
    $p1->aumentarEstoque(5);
    $p1->diminuirEstoque(2);
    print_r(" O {$p1->getDescricao()} custa R$ {$p1->getPreco()} e temos {$p1->getEstoque()} unidades no estoque");

?>