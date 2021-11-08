<?php

    require_once("database/Database.php");
    $con = dbConnection();
    $errors = array();
    $invoice_status = array("Unpaid","Paid","Part-Paid");

    /***************       Get id,fname,lname Clients       ***************/
        $query = "SELECT id,fname,lname FROM `clients` WHERE 1 ORDER BY created_at DESC";
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

    /***************      Get id,fname,lname Clients       ***************/

    /***************        Create New Invoice             ***************/
        if(isset($_POST['create-invoice'])){
            $title = mysqli_real_escape_string($con,$_POST['title']);
            $amount = mysqli_real_escape_string($con,$_POST['amount']);
            $tax = mysqli_real_escape_string($con,$_POST['tax']);
            $discount = mysqli_real_escape_string($con,$_POST['discount']);
            $total = mysqli_real_escape_string($con,$_POST['total']);
            $invoice_status = mysqli_real_escape_string($con,$_POST['picked_status']);
            $created_date = mysqli_real_escape_string($con,$_POST['created_date']);
            $payment_date = mysqli_real_escape_string($con,$_POST['payment_date']);
            $note = mysqli_real_escape_string($con,$_POST['notes']);
            $clientID = mysqli_real_escape_string($con,$_POST['client_id']);
            $notfiy = 'Has Created A New Invoice';

            if(!empty($title) && !empty($amount) && !empty($total)){

                $query = " INSERT INTO invoices (title, amount, tax, discount, total, invoice_status, created_date, payment_date, note, clientID)
                VALUES ('$title', '$amount', '$tax', '$discount','$total','$invoice_status','$created_date', '$payment_date', '$note', '$clientID');";
                $query .="INSERT INTO notifications (notify, status , user_id , userName) VALUES ('$notfiy', 'unread' ,'$user_id', '$full_name')";

                if(mysqli_multi_query($con, $query)){
                    $_SESSION['success'] = 'Created A New Invoice Successfully';
                    die("<script>window.location = 'index.php?page=View-Invoices'; window.reload();</script>");
                }
                else{
                    $_SESSION['error'] = 'Failed To Create A New Invoice';
                } 
            }
            else{
                $_SESSION['error'] = 'Please Make Sure You Filled The Required Fields';
            }
        }
    /***************        Create New Invoice             ***************/

    /***************          Get All Invoices             ***************/
        if(isset($_GET['page']) && $_GET['page']=='View-Invoices' || $_GET['page']=='test'){

            $query = "SELECT invoices.*, clients.id,clients.fname,clients.lname
                    FROM invoices
                    INNER JOIN clients ON invoices.clientID=clients.id;";

            $execute = mysqli_query($con, $query);
            $fetch_invoices = array();
            if($execute){
                if(mysqli_num_rows($execute) > 0){
                    while($fetch = $execute->fetch_assoc()){
                        $fetch_invoices [] = $fetch;
                    }
                }
                else{
                    $errors['get_invoices'] = 'No Data To Show';
                }
            }
            else{
                $errors['get_invoices'] = 'Failed To Get Info. From Database';
            }
        }
    /***************          Get All Invoices             ***************/
    

?>