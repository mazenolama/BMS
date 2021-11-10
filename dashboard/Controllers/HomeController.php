<?php
    session_start();
    require_once("database/Database.php");
    $con =  dbConnection();
    $errors = array();
    unset ($_SESSION["password"]);
    error_reporting(E_ALL); 
    ini_set('display_errors', 1);

    /***************    Checking Vaild Authorization       ***************/
        $email = $_SESSION['email'];
        if(!empty($email)){
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $row = mysqli_query($con, $sql);
            if($row){
                $fetch_info = mysqli_fetch_assoc($row);
                
                $user_info = array("id" => $fetch_info['id'],
                                   "fname" => $fetch_info['fname'],
                                   "lname" => $fetch_info['lname'],
                                   "email" => $fetch_info['email'],
                                   "phone_no" => $fetch_info['phone_no'],
                                   "role" => $fetch_info['role'],
                                   "curr_status" => $fetch_info['curr_status'],
                                   "notes" => $fetch_info['notes'],
                                   "full_name" =>  $fetch_info['fname'].' '.$fetch_info['lname'],
                                   "fname_letter" => ucfirst($fetch_info['fname'][0]),
                                   "lname_letter" => ucfirst($fetch_info['lname'][0]));
                $full_name =$user_info['full_name'];
                $user_id = $user_info['id'];
            }
        }
        else{
            header('Location: https://bills.hadefit.com');
        }
    /***************    Checking Vaild Authorization       ***************/

    /***************         Update Employee Profile       ***************/

        if(isset($_POST['update-profile'])){

            $datetime = date_create()->format('Y-m-d H:i:s');
            $notfiy = 'Has Updated An Existing User';

            $fname_user = mysqli_real_escape_string($con,$_POST['fname']);
            $lname_user = mysqli_real_escape_string($con,$_POST['lname']);
            $email_user = mysqli_real_escape_string($con,$_POST['email']);
            $phone_no_user = mysqli_real_escape_string($con,$_POST['phone_no']);
            $role_user = mysqli_real_escape_string($con,$_POST['role']);
            $curr_status_user = mysqli_real_escape_string($con,$_POST['curr_status']);
            $password_user = mysqli_real_escape_string($con,$_POST['password']);
                                    
            if(!empty($fname_user) && !empty($email_user) && !empty($phone_no_user)){
                
                if(!empty($password_user)){
                    $password_user= password_hash($password_user, PASSWORD_ARGON2ID);

                    $query  = "UPDATE users SET fname='$fname_user',lname='$lname_user',
                                email='$email_user',phone_no='$phone_no_user',notes='$notes_user',
                                role='$role_user', curr_status='$curr_status_user', password='$password_user',
                                updated_at='$datetime' WHERE id='$user_id';";
                }
                else{
                    $query  = "UPDATE users SET fname='$fname_user',lname='$lname_user',
                                email='$email_user',phone_no='$phone_no_user',notes='$notes_user',
                                role='$role_user', curr_status='$curr_status_user',updated_at='$datetime' 
                                WHERE id='$user_id';";
                }

                if(mysqli_query($con, $query)){
                    $_SESSION['success'] = 'Updated An Existing User Successfully';
                    die("<script>window.location = 'index.php?page=Profile'; window.reload();</script>");
                }
                else{
                    $_SESSION['error'] = 'Failed To Updated An Existing User';
                }
                
            }
            else{
                $_SESSION['error'] = 'Please Make Sure You Filled The Required Fields';
            }
        }
        
        
    /***************         Update Employee Profile       ***************/

    /***************         Get Notifications             ***************/
        
        $query = "SELECT * FROM `notifications` WHERE status='unread' ORDER BY id DESC";
        $execute = mysqli_query($con, $query);
        $fetch_notify = array();
        if($execute || isset($_SESSION['success'])){
            if(mysqli_num_rows($execute) > 0){
                while($fetch = $execute->fetch_assoc()) {
                    $fetch_notify [] =$fetch;
                }
            }
            else{
                $errors['notifications'] = 'No New Notifications To Show';
            }
        }
        else{
            $errors['notifications'] = 'Failed To Get Info. From Database';
        }

    /***************         Get Notifications             ***************/

    /***************                Logout                 ***************/    
        if(isset($_POST['logout'])){
            session_unset();
            session_destroy();
            header('Location: index.php');
        }
    /***************                Logout                 ***************/

    /**************         Get Page Name Function         ***************/
        function pageName(){
            if(isset($_GET['page']))
                echo $_GET['page'];
            else
                echo 'Dashboard' ;
        }
    /**************         Get Page Name Function         ***************/

    /**************         Mark As Read Function          ***************/
        if(array_key_exists('flush', $_POST)){
            $con =  dbConnection();
            $query ="UPDATE notifications SET status='read' WHERE status='unread'";
            mysqli_query($con, $query);
            die("<script>window.location = 'index.php'; window.reload();</script>");
        }
    /**************         Mark As Read Function          ***************/

    /*************      Calculate Total Time Ago Function  ***************/
        function time_elapsed_string($datetime, $full = false) {
            $now = new DateTime;
            $ago = new DateTime($datetime);
            $diff = $now->diff($ago);
        
            $diff->w = floor($diff->d / 7);
            $diff->d -= $diff->w * 7;
        
            $string = array(
                'y' => 'year',
                'm' => 'mon',
                'w' => 'w',
                'd' => 'd',
                'h' => 'h',
                'i' => 'min',
                's' => 'sec',
            );
            foreach ($string as $k => &$v) {
                if ($diff->$k) {
                    $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                } else {
                    unset($string[$k]);
                }
            }
        
            if (!$full) $string = array_slice($string, 0, 1);
            return $string ? implode(', ', $string) . ' ago' : 'just now';
        }
    /*************      Calculate Total Time Ago Function  ***************/
    if(isset($_POST['discard']))
        die("<script>window.location = '../dashboard';</script>");

?>