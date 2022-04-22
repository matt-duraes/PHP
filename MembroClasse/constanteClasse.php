<?php 
class Pessoa {
    private $nome;
    private $genero;
    const GENEROS = ['M'=> 'Masculino', 'F'=> 'Feminino'];


    public function __construct($nome,$genero){
        $this->nome=$nome;
        $this->genero=$genero;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getNomeGenero(){
        return Pessoa::GENEROS[$this->genero];
    }
}

$p1 = new Pessoa('Mateus','M');
$p2 = new Pessoa('Cleiton','M');

print $p1->getNome().'<br>';

print $p1->getNomeGenero();







?>