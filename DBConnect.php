<?php

class DBConnect { 
    private $servername = "localhost"; 
    private $username = "root";
    private $password = "";
    private $dbname="cadastrovestibulando";
    private $conn;
    public function __construct() { 
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            print_r($this->conn); 
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function __destruct() { 
        $this->fechar_conexao();
	    print "DESTRUÍDO: Objeto {$this->conn}\n"; 
	} 

    private function fechar_conexao(){
        $this->conn = null;
    }
    
  
    public function inserir_dados($nome, $cpf, $telefone){
        try { 
            $sql = "INSERT INTO candidato (nome, cpf, telefone) VALUES ('$nome', '$cpf', '$telefone')";
            $this->conn->exec($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        return True;
    }
}




?>