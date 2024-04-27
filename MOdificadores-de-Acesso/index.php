<?php  
class Veiculo
{
    # code...
    public $marca;
    public $quilometragem;

    public function __construct($marca ,$quilometragem) {
        $this->marca = $marca;
        $this->quilometragem = $quilometragem;
    }

    function buzinar(){
        echo "buzinou";
    }

    function freiar(){
        echo "Freiou";
    }

    function getMarca() {
        return $this->marca;
    }

    function getQuilometragem() {
        return $this->quilometragem;
    }
}

class Carro extends Veiculo
{
    # code...
    
}

class Moto extends Veiculo{

}

    $carro = new Carro("gol", "0km");
    echo $carro->getMarca() . " - ";
    $carro->buzinar();

    
    $moto = new Moto("mt-03", "0km");
    echo "<br>";
    echo $moto->getMarca() . " - ";
    echo $moto->buzinar();
?>