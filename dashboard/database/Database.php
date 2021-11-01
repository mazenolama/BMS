<?php

    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();

    function dbConnection(){
        // CHANGE THE DB INFO ACCORDING TO YOUR DATABASE
        $db_host = $_ENV['DB_SERVER'];
        $db_name = $_ENV['DB_DATABASE'];
        $db_username = $_ENV['DB_USERNAME'];
        $db_password = $_ENV['DB_PASSWORD'];
        $conn = mysqli_connect( $db_host , $db_username, $db_password, $db_name);

       if($conn)
            return $conn;
        else
        {
            die($conn);
            echo 'Can Not Connect with database';
        }
    }

?>