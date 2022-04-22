<?php 
        //CLASSE
    class Produto { 
        // ATRIBUTOS
        public $descricao; 
        public $estoque;
        public $preco;

        // MÉTODOS
        public function aumentarEstoque ($unidades) {
            if(is_numeric($unidades) and $unidades >=0){
                $this->estoque += $unidades;
            }
        }
        public function diminuirEstoque($unidades){
            if(is_numeric($unidades) and $unidades >=0){
                $this->estoque -= $unidades;
                if($this->estoque ==0){
                    print_r("Não temos mais unidades no estoque, favor comprar mais ");
                    print '<br/>';
                } else {
                    print_r("Temos {$this->estoque} unidades de {$this->descricao} no estoque");
                    print '<br/>';
                }
            } 
        }
        public function reajustarPreco($percentual){
            if (is_numeric($percentual) and $percentual >0){
                $this->preco *= (1+($percentual/100));
            }
        }
    }

    $p1 = new Produto;
    $p1->descricao = 'Chocolate';
    $p1->estoque = 10;
    $p1->preco = 5;
    $p1->aumentarEstoque(7);
    $p1->diminuirEstoque(3);
    
    
    $p2 = new Produto;
    $p2->descricao = 'Café';
    $p2->estoque = 12;
    $p2->preco = 10;
    $p2->diminuirEstoque(3);
    
    


    print_r("O {$p1->descricao} custa R$ {$p1->preco} "); 
    print'<br/>';
    print_r("O {$p2->descricao} custa R$ {$p2->preco} ");
    print '<br/>';
    
    $p1->reajustarPreco(50);
    print_r("Houve reajuste de preço e agora o {$p1->descricao} custa R$ {$p1->preco} "); 
    print'<br/>';





?>