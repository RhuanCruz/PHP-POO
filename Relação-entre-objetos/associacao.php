<?php 
    class Pedido
    {
        public $numero;
        public $cliente;


    }
    class Cliente
    {
        public $nome;
        public $endereco;
    }

    $cliente = new Cliente();
    $cliente->nome= "Rhuan";
    $cliente->endereco= "Joao azevedo sobrinho, 965";

    $pedido = new Pedido();
    $pedido->numero = "123";
    $pedido->cliente = $cliente;

    // exemplo de como seria para guardar em um banco de dados 
    $dados = array(
        "num_pedido" => $pedido->numero,
        "nome_cliente" => $pedido->cliente->nome,
        "endereco_cliente" => $pedido->cliente->endereco
    );

    var_dump($dados);
?>