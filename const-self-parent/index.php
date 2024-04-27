<?php 

    class Pessoa
    {
        public const nome = "Rhuan";

        public function exibirNome(){
            echo self::nome;
        }
    }

    class Rhuan extends Pessoa{
        public const nome = "Cruz";
    
            
        public function exibirNome(){
            echo parent::nome;
        }
    }

    // $rhuan = new Rhuan();
    // $rhuan->exibirNome();
?>