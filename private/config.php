<?php
    
/*-----------------------------------------------------------  Database Connection and Class ----------------------------------------------------------- */
 class config {    
    private $server = "localhost";
    private $user = "root";
    private $pass = "24681357";
    private $dbname = "test";
    public $conn;


    public function __construct()
    {
        $this->conn = new mysqli($this->server, $this->user, $this->pass, $this->dbname);
        if ($this->conn->connect_error) {
         echo "Connection Failed";
        }
        else {
            $this->conn;
        }
        
    }

}