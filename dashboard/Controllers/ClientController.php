<?php
    
    require_once("database/Database.php");
    $con = dbConnection();
    $errors = array();
    
    /***************         Get All Clients               ***************/
        if(  $path  =='Clients' ||  $path == 'Dashboard'){
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
        }

    /***************         Get All Clients               ***************/

    /***************        Create New Client              ***************/
        if(isset($_POST['create-client']))
        {
            $fname_client = mysqli_real_escape_string($con,$_POST['fname']);
            $lname_client = mysqli_real_escape_string($con,$_POST['lname']);
            $companyName = mysqli_real_escape_string($con,$_POST['companyName']);
            $companyURL = mysqli_real_escape_string($con,$_POST['companyURL']);
            $email_client = mysqli_real_escape_string($con,$_POST['email']);
            $phone_no_client = mysqli_real_escape_string($con,$_POST['phone_no']);
            $address = mysqli_real_escape_string($con,$_POST['address']);
            $notfiy = 'Has Created A New Client';
            
            if(!empty($fname_client) && !empty($lname_client) && !empty($email_client) && !empty($phone_no_client)){
                $query = " INSERT INTO clients (fname, lname, companyName, companyURL, email, phone_no, address)
                        VALUES ('$fname_client', '$lname_client', '$companyName', '$companyURL','$email_client','$phone_no_client',' $address');";
                $query .= "INSERT INTO notifications (notify,user_id, status, userName) VALUES ('$notfiy','$user_id','unread' ,'$full_name')";
                
                if(mysqli_multi_query($con, $query)){
                    $_SESSION['success'] = 'Created A New Client Successfully';
                    die("<script>window.location = 'Clients'; window.reload();</script>");
                }
                else{
                    $_SESSION['error'] = 'Failed To Create A New Client';
                }
            }
            else{
                $_SESSION['error'] = 'Please Make Sure You Filled The Required Fields';
            }
        }
    /***************        Create New Client              ***************/

    /***************        Update Existing Client              ***************/
        if(isset($_GET['c_id'])){
            $c_id= $_GET['c_id'];
            $query = "SELECT * FROM clients WHERE id='$c_id'";
            $execute = mysqli_query($con, $query);
            $fetch_client = array();
            if($execute){
                if(mysqli_num_rows($execute) > 0){
                    $fetch_client = $execute->fetch_assoc();
                    
                    if(isset($_POST['update-client'])){
                        $fname_client = mysqli_real_escape_string($con,$_POST['fname']);
                        $lname_client = mysqli_real_escape_string($con,$_POST['lname']);
                        $companyName = mysqli_real_escape_string($con,$_POST['companyName']);
                        $companyURL = mysqli_real_escape_string($con,$_POST['companyURL']);
                        $email_client = mysqli_real_escape_string($con,$_POST['email']);
                        $phone_no_client = mysqli_real_escape_string($con,$_POST['phone_no']);
                        $address = mysqli_real_escape_string($con,$_POST['address']);
                        $notfiy = 'Has Updated An Existing Client';
                        
                        if(!empty($fname_client) && !empty($lname_client) && !empty($email_client) && !empty($phone_no_client)){
                            $datetime = date_create()->format('Y-m-d H:i:s');
                            $query  = " UPDATE clients SET fname='$fname_client',lname='$lname_client',companyName='$companyName',companyURL='$companyURL',email='$email_client',phone_no='$phone_no_client',address='$address',updated_at='$datetime' WHERE id='$c_id';";
                            
                            $query .= "INSERT INTO notifications (notify,user_id, status, userName) VALUES ('$notfiy','$user_id','unread' ,'$full_name')";
                            
                            if(mysqli_multi_query($con, $query)){
                                $_SESSION['success'] = 'Updated An Existing Client Successfully';
                                die("<script>window.location = 'Client?c_id=$c_id'; window.reload();</script>");
                            }
                            else{
                                $_SESSION['error'] = 'Failed To Updated An Existing Client';
                            }
                        }
                        else{
                            $_SESSION['error'] = 'Please Make Sure You Filled The Required Fields';
                        }
                    }
                }
                else{
                    $errors['get_client'] = 'No Data To Show For This Client';
                }
            }
            else{
                $errors['get_client'] = 'Failed To Get Info. From Database';
            }
        }
    /***************        Update Existing Client              ***************/

    /***************        Delete Client              ***************/
        if(isset($_GET['action']) && $_GET['action'] =='delete-client')
        {
            $c_id= $_GET['c_id'];
            $notfiy = 'Has Deleted A Client';
            $query = "DELETE FROM `clients` WHERE id='$c_id';";

            $query .= "INSERT INTO notifications (notify,user_id, status, userName) VALUES ('$notfiy','$user_id','unread' ,'$full_name')";
            
            $execute = mysqli_multi_query($con, $query);
            if($execute){
                $_SESSION['success'] = 'Deleted A Client Successfully';
                die("<script>window.location = 'Clients';window.reload(); </script>");
            }
            else{
                $_SESSION['error'] = 'Failed To Delete A Client';
            }
        }
    /***************        Delete Client              ***************/

?>