<?php 

    class Pessoa
    {
        public $nome;

        public function __construct() {}
    }

    $pessoa1 = new Pessoa();
    $pessoa1->nome = 'Rhuan';

    $pessoa2 = clone $pessoa1; // pessoa 2 não é uma instancia e sim faz referencia ao valor de pessoa1
    $pessoa2->nome = "Larissa"; // pessoa2 fazendo referenca a pessoa1 não mudou o valor de pessoa1
    echo $pessoa1->nome; // = Rhuan
?>