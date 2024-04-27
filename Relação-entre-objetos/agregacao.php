<?php 
    class Produtos
    {
        public $nome;
        public $valor; 

        public function __construct($nome , $valor) {
            $this->nome = $nome;
            $this->valor = $valor;
        }
    }

    class Carrinho
    {
        public $produtos;

        public function add(Produtos $produtos) {
            $this->produtos[] = $produtos ;
        }

        function exibir(){
            foreach ($this->produtos as $produto) {
                echo $produto->nome . "<br>";
                echo $produto->valor . "<br>";
            }
        }
    }
    $produto1 = new Produtos("notebook", "2000");
    $produto2 = new Produtos("mouse", "500");

    $carrinho = new Carrinho();
    $carrinho->add($produto1);
    $carrinho->add($produto2);

    $carrinho->exibir();
?>