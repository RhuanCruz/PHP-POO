<?php 
    class Login{
        protected $email;
        protected $senha;

        public function __construct($email, $senha) {
            $this->email = $email;
            $this->senha = $senha;
        }

        function logar(){
            if ($this->email == "rhuan@gmail.com" and $this->senha == "123") {
                # code...
                echo "dados validos";
            }else{
                echo "dados invalidos";
            }
        }

        function getEmail(){
            return $this->email;
        }
        
        function setEmail($e){
            $email = filter_var($e, FILTER_SANITIZE_EMAIL);
            return $this->email = $email;
        }

        function getSenha(){
            return $this->senha;
        }
        
        function setSenha($e){
            return $this->senha = $e;
        }
    }


    $p1 = new Login("()rhuan@gmail/.com", "123");

    echo  'Email do usuario = '. $p1->getEmail() . "<br>";
    echo "novo email = " . $p1->setEmail("rhuancruz2011@gmail.com");
?>