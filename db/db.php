<?php
class DB{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'shoppingcartdb';
    
    public $conn;
    
    public function __construct(){

        if (!isset($this->conn)) {
            
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
    }
}
?>