<?php
    session_start();
    require_once("database/Database.php");
    $con =  dbConnection();
    $errors = array();
    unset ($_SESSION["password"]);
    error_reporting(E_ALL); 
    ini_set('display_errors', 1);

    $path = basename($_SERVER['REQUEST_URI']);
    $path = explode('?',$path);
    $path = $path[0];
    
    if($path == 'dashboard')
      $path = 'Dashboard';

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

    /***************         Insert Company Info           ***************/
        if(isset($_POST['insert-company-info']))
        {
            $company_name = mysqli_real_escape_string($con,$_POST['name']);
            $company_email = mysqli_real_escape_string($con,$_POST['email']);
            $company_address = mysqli_real_escape_string($con,$_POST['address']);
            $company_phone = mysqli_real_escape_string($con,$_POST['phone']);
            $query = " INSERT INTO company (name, email, address, phone)
            VALUES ('$company_name', '$company_email', '$company_address', '$company_phone')";
            if(mysqli_multi_query($con, $query)){
                $_SESSION['success'] = 'Company Informations Has Saved Successfully';
            }
            else{
                $_SESSION['error'] = 'Failed To Saved A Company Informations';
            } 
        }
    /***************         Insert Company Info           ***************/

    /***************         Update Company Info           ***************/
        if(isset($_POST['update-company-info']))
        {
            $company_name = mysqli_real_escape_string($con,$_POST['name']);
            $company_email = mysqli_real_escape_string($con,$_POST['email']);
            $company_address = mysqli_real_escape_string($con,$_POST['address']);
            $company_phone = mysqli_real_escape_string($con,$_POST['phone']);
            $query = "UPDATE company SET name= '$company_name', email= '$company_email',address ='$company_address' , phone ='$company_phone' WHERE 1";            
            if(mysqli_multi_query($con, $query)){
                $_SESSION['success'] = 'Company Informations Has Updated Successfully';
            }
            else{
                $_SESSION['error'] = 'Failed To Updated A Company Informations';
            } 
        }
    /***************         Update Company Info           ***************/

    /***************         Get All Company Info          ***************/
        if($path == 'Settings')
        {
            $query = "SELECT * FROM `company` WHERE 1";
            if($execute = mysqli_query($con, $query))
            {
                if(mysqli_num_rows($execute) > 0){
                    while($fetch = $execute->fetch_assoc()) {
                        $fetch_company = $fetch;
                    }
                }
            }
            else{
                $_SESSION['error'] = 'Failed To Get Company Informations';
            } 
        }
    /***************         Get All Company Info          ***************/

    /***************         Get Notifications             ***************/
        
        $query = "SELECT * FROM `notifications` ORDER BY id DESC";
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

        $q = "SELECT users FROM `notifications` WHERE users=2";
        $exe = mysqli_query($con, $q);
        $u = array();
        if($exe || isset($_SESSION['success'])){
            if(mysqli_num_rows($exe) > 0){
                while($fetch = $exe->fetch_assoc()) {
                    $u =$fetch;
                }
                var_dump($u['users']);
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
            header('Location: ../');
        }
    /***************                Logout                 ***************/

    /**************         Mark As Read Function          ***************/
        if(array_key_exists('flush', $_POST)){
            $query ="UPDATE notifications SET status='read' WHERE user_id='$user_id'";
            mysqli_query($con, $query);
            die("<script>window.location = '../dashboard'; window.reload();</script>");
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