<?php 
class Pessoa
{
    // private $nome;

    // public function __set($nome, $valor)
    // {
    //     $this->nome = $valor;
    // }
    //  public function __get($nome)
    //  {
    //     return $this->nome;
    //  }

    private $dados = array();
    
    public function __set($nome, $valor)
    {
        $this->dados[$nome] = $valor;
    }
    public function __get($nome)
    {
        return $this->dados[$nome];
    }

    public function __toString()
    {
     return "tentei imprimir o objeto";   
    }

    public function __invoke()
    {
        return "objeto como função";
    }
}

$pessoa = new Pessoa;
$pessoa->nome = "Rhuan";
echo $pessoa->nome;
 

?>