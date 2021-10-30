<?php

    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/../../');
    $dotenv->load();
    $con = dbConnection();
    $errors = array();

    /***************         Get All Clients               ***************/
        $query = "SELECT * FROM `clients` WHERE 1 ORDER BY created_at DESC";
        $execute = mysqli_query($con, $query);
        $fetch_clients = array();
        if($execute){
            if(mysqli_num_rows($execute) > 0){
                while($fetch = $execute->fetch_assoc()) {
                    $fetch_clients [] = $fetch;
                }
            }
            else{
                $errors['get_clients'] = 'No Data To Show';
            }
        }
        else{
            $errors['get_clients'] = 'Failed To Get Info. From Database';
        }

    /***************         Get All Clients               ***************/
?>