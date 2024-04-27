<?php 
    require 'classes/produto.php';
    require 'models/produto.php';
    
    use classes\Produto as ProductClasses;
    use models\Produto as ProductModels;
    $produto = new ProductClasses();
    $produto2 = new ProductModels();
    $produto->mostrarDetalhes();
    echo "<br>";
    $produto2->mostrarDetalhes();
?>