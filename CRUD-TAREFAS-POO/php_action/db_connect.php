<?php 
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "projetotarefas";

    $connect = mysqli_connect($server_name, $user_name, $password, $db_name);

    if (mysqli_connect_error()) {
        echo "Erro ao conectar no banco de dados" . mysqli_connect_error();
    }else {
      
    }
?>