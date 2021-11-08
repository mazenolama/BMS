<?php

    require_once("database/Database.php");
    $con = dbConnection();
    $errors = array();
    $invoice_status = array("Unpaid","Paid","Part-Paid");

    /***************       Get id,fname,lname Clients       ***************/
        if(isset($_GET['page']) && $_GET['page']=='Create-Invoice' || $_GET['page']=='Edit-Invoice' ){
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
        }
    /***************       Get id,fname,lname Clients       ***************/

    /***************        Create New Invoice             ***************/
        if(isset($_POST['create-invoice'])){
            $title = mysqli_real_escape_string($con,$_POST['title']);
            $amount = mysqli_real_escape_string($con,$_POST['amount']);
            $tax = mysqli_real_escape_string($con,$_POST['tax']);
            $tax_prg = mysqli_real_escape_string($con,$_POST['tax_prg']);
            $discount = mysqli_real_escape_string($con,$_POST['discount']);
            $discount_prg = mysqli_real_escape_string($con,$_POST['discount_prg']);
            $total = mysqli_real_escape_string($con,$_POST['total']);
            $invoice_status = mysqli_real_escape_string($con,$_POST['picked_status']);
            $created_date = mysqli_real_escape_string($con,$_POST['created_date']);
            $payment_date = mysqli_real_escape_string($con,$_POST['payment_date']);
            $note = mysqli_real_escape_string($con,$_POST['notes']);
            $clientID = mysqli_real_escape_string($con,$_POST['client_id']);
            $notfiy = 'Has Created A New Invoice';

            if(!empty($title) && !empty($amount) && !empty($total)){

                $query = " INSERT INTO invoices (title, amount, tax, tax_prg, discount, discount_prg, total, invoice_status, created_date, payment_date, note, clientID)
                VALUES ('$title', '$amount', '$tax','$tax_prg', '$discount','$discount_prg','$total','$invoice_status','$created_date', '$payment_date', '$note', '$clientID');";
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
        if(isset($_GET['page']) && $_GET['page']=='View-Invoices' ){

            $query = "SELECT invoices.*, clients.fname,clients.lname
                    FROM clients
                    INNER JOIN invoices ON invoices.clientID=clients.id;";

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

    /***************          Get Only Invoice             ***************/
        if(isset($_GET['i_id'])){

            $i_id= $_GET['i_id'];
            $query = "SELECT invoices.*, clients.fname,clients.lname
            FROM clients
            INNER JOIN invoices ON invoices.id='$i_id';";

            $execute = mysqli_query($con, $query);
            $fetch_invoice = array();

            if($execute)
            {
                if(mysqli_num_rows($execute) > 0){
                    $fetch_invoice = $execute->fetch_assoc();
                }
                else{
                    $errors['get_invoice'] = 'No Data To Show For This Invoice';
                }
            }
            else{
                $errors['get_invoice'] = 'Failed To Get Info. From Database';
            }
        }
    /***************          Get Only Invoice             ***************/

    /***************           Update Invoice              ***************/
        if(isset($_POST['update-invoice'])){

            $i_id= $_GET['i_id'];
            $title = mysqli_real_escape_string($con,$_POST['title']);
            $amount = mysqli_real_escape_string($con,$_POST['amount']);
            $tax = mysqli_real_escape_string($con,$_POST['tax']);
            $tax_prg = mysqli_real_escape_string($con,$_POST['tax_prg']);
            $discount = mysqli_real_escape_string($con,$_POST['discount']);
            $discount_prg = mysqli_real_escape_string($con,$_POST['discount_prg']);
            $total = mysqli_real_escape_string($con,$_POST['total']);
            $invoice_status = mysqli_real_escape_string($con,$_POST['picked_status']);
            $created_date = mysqli_real_escape_string($con,$_POST['created_date']);
            $payment_date = mysqli_real_escape_string($con,$_POST['payment_date']);
            $note = mysqli_real_escape_string($con,$_POST['notes']);            
            $notfiy = 'Has Updated An Existing Invoice';
            
            if(!empty($title) && !empty($total) && !empty($amount)){

                $datetime = date_create()->format('Y-m-d H:i:s');

                $query  = " UPDATE invoices SET title='$title',amount='$amount',tax='$tax',tax_prg='$tax_prg',discount='$discount',discount_prg='$discount_prg',total='$total',invoice_status='$invoice_status',created_date='$created_date',payment_date='$payment_date',note='$note', updated_at='$datetime' WHERE id='$i_id';";
                
                $query .= "INSERT INTO notifications (notify, userName) VALUES ('$notfiy', '$full_name')";
                
                if(mysqli_multi_query($con, $query)){
                    $_SESSION['success'] = 'Updated An Existing Invoice Successfully';
                    die("<script>window.location = 'index.php?page=View-Invoices'; window.reload();</script>");
                }
                else{
                    $_SESSION['error'] = 'Failed To Updated An Existing Invoice';
                }
            }
            else{
                $_SESSION['error'] = 'Please Make Sure You Filled The Required Fields';
            }
        }
    /***************           Update Invoice              ***************/

    /***************           Delete Invoice              ***************/
        if(isset($_GET['action']) && $_GET['action']== 'delete-invoice')
        {
            $u_id= $_GET['i_id'];
            $notfiy = 'Has Deleted A Client';
            $query = "DELETE FROM `invoices` WHERE id='$i_id';";
            $query .="INSERT INTO notifications (notify, status , user_id , userName) VALUES ('$notfiy', 'unread' ,'$user_id', '$full_name')";
            $execute = mysqli_multi_query($con, $query);
            if($execute){
                $_SESSION['success'] = 'Deleted A Invoice Successfully';
                die("<script>window.location = 'index.php?page=View-Invoices';window.reload(); </script>");
            }
            else{
                $_SESSION['error'] = 'Failed To Delete An Invoice';
            }
        }
    /***************           Delete Invoice              ***************/


?>