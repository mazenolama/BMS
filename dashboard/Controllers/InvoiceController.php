<?php

    require_once("database/Database.php");
    $con = dbConnection();
    $errors = array();
    $invoice_status = array("Unpaid","Paid","Part-Paid");

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

    /***************        Create New Invoice             ***************/
    if(isset($_POST['create-invoice'])){

        $amount =  $_POST['amount'];
        $tax = $_POST['tax'];
        $discount = $_POST['discount'];
        $total =  $_POST['total'];
        var_dump($amount);
        var_dump($tax);
        var_dump($discount);
        var_dump($total);

    }
    /***************        Create New Invoice             ***************/
?>