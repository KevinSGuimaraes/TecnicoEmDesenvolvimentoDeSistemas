<?php  

class connect
{
    private $host;
    private $dbname;
    private $password;
    private $user;
    private $port;

    function __construct()
    {
        $this->host = "localhost";
        $this->dbname = "agenda";
        $this->password = "123456";
        $this->user = "postgres";
        $this->port = "5433";
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
            $msg = 'Falha no acesso com o PostGres;'.$erro->getMessage();
            echo $msg;
            return(NULL);
        }
    }
}
?>