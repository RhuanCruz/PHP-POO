<?php 
//criando classe
class Pessoa{
    public $nome;
    public $idade;
    public $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    
    }

    function falar(){
        echo $this->nome. " de ". $this->idade. " anos " ." Falou";
    }
}

$p1 = new Pessoa("Rhuan", 21, "Masculino");
$p1->falar();

?>