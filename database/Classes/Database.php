<?php
class Database{
    
    // CHANGE THE DB INFO ACCORDING TO YOUR DATABASE
    
   /* private $db_host = $_ENV['DB_SERVER'];
    private $db_name = $_ENV['DB_DATABASE'];
    private $db_username = $_ENV['DB_USERNAME'];
    private $db_password = $_ENV['DB_PASSWORD'];*/
    
    public function dbConnection(){
        
        try{
            $conn = new PDO('mysql:host='.$_ENV['DB_SERVER'].';dbname='.$_ENV['DB_DATABASE'],$_ENV['DB_USERNAME'],$_ENV['DB_PASSWORD']);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage(); 
            exit;
        }
          
    }
}