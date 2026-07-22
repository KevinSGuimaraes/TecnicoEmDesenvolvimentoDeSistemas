<?php

    class User
    {
        private string $login;
        private string $password;
        private $pdo;

        function __construct()
        {
            include_once("Connect.php");
            $conexao = new Connect();
            $this->pdo = $conexao->conectarBanco();

        }

        public function ValidarLogin($email, $senha)
        {
            $this->login = $email;
            $this->password = $senha;

            $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha AND ativo = TRUE;";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':email', $this->login);
            $stmt->bindParam(':senha', $this->password);
            $stmt->execute();
             
            $vetor = $stmt->fetch(PDO::FETCH_ASSOC);
            if(isset($vetor["email"]) && isset($vetor["senha"]))
            {
                return (TRUE);
            }
            else
            {
                return (FALSE);
            }

        }


    }
?>