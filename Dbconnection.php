<?php

class Dbconnect{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "harshad"; 
    protected $conn;                    

    public function __construct(){
 
        if(!isset($this->conn)){    

           
            $this->conn = mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
        }

        return $this->conn;
    }

}



?>