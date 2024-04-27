<?php 
    class Animal{

        public function andar(){
            echo "Animal andou ";
        }
    }

    class Cavalo extends Animal{
        public function andar()
        {
         echo "Cavalo andou";   
        }
    }

    $animal = new Cavalo();
    $animal->andar();
?>