<?php

        class Connect
        {
            private $host; //endereço onde o servidor de banco de dados está instalado.
            private $dbname; //Nome da base de dados que iriemos utilizar.
            private $password; //Senha do meu banco de dados.
            private $user; //É o usuário do banco de dados no postgre é postgres
            private $port; //Porta onde é executado as conexões com o banco de dados o padrão do Postgres é 5432
            
            function __construct()
            {
                $this->host = "localhost";
                $this->dbname = "painel";
                $this->password = "123456";
                $this->user = "postgres";
                $this->port = "5432";
            }

            public function conectarBanco()
            {
                try
                {
                    $PDO = new PDO("pgsql:host=".$this->host.";port=".$this->port.";dbname=".$this->dbname,$this->user,$this->password);
                    return($PDO);
                }
                catch(PDOException $erro)
                {
                    $msg = "Falha no acesso com o PostGres: ".$erro->getMessage();
                    echo $msg;
                    return(NULL);
                }
            }
        }

?>