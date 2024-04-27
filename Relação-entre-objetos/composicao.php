<?php 
    class Pessoa
    {
        function atrubuiNome($nome){
            return "Nome da pessoa é ". $nome;
        }
    }

    class Exibe{
        public $pessoa;
        public $nome;

            // o construtor recebe por parametro o nome e atriubi ao ao atributo nome
        public function __construct($nome) {
            $this->pessoa = new Pessoa;
            $this->nome = $nome;
        }

        public function exibeNome(){
            echo $this->pessoa->atrubuiNome($this->nome);
        }
    }

    $exibe = new Exibe("Rhuan");
    $exibe->exibeNome();
?>