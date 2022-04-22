<?php 
    class Pessoa {
        protected $nome;
        public function __construct($nome){
            $this->nome = $nome;
        }
    }

    class Funcionario extends Pessoa {
        private $cargo, $salario;

        public function contrata($cargo,$salario){
            if(is_numeric($salario) and $salario >0){
                $this->cargo = $cargo;
                $this->salario = $salario;
            }
            
        }
        public function getInfo(){
            return "Nome:{$this->nome}, Salário: {$this->salario}";
        }
    }
$p1 = new Funcionario ('Mateus Durães');
$p1->contrata('Desenvolvedor Back end',2000);

echo '<pre>';
var_dump ($p1);
echo '</pre>';








?>