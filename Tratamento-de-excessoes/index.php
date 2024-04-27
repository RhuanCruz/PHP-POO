<?php 
    class Newsletter{

        public function cadastrarEmail($email){
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                # code...
                throw new Exception("Email é invalido", 1);

            }else {
                echo "Email cadastrado com sucesso ";
            }
            
        }
    }

    $newletter = new Newsletter();

    try {
        $newletter->cadastrarEmail("contato@.com");
    } catch (Exception $e) { // capturar todas as exceções que podem ter 
        echo $e->getMessage();
    }
?>