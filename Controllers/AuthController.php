<?php 

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();
session_start();
$con = dbConnection();
$email = "";
$errors = array();

$path = basename($_SERVER['REQUEST_URI']);


    //if user signup button
    if(isset($_POST['signup'])){
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $lname = mysqli_real_escape_string($con, $_POST['lname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $_SESSION['error'] = "Confirm password not matched!";
        }
        $email_check = "SELECT * FROM users WHERE email = '$email'";
        $res = mysqli_query($con, $email_check);
        if(mysqli_num_rows($res) > 0){
            $_SESSION['error'] = "Email that you have entered is already exist!";
            $error=true;
        }
        if($error==false){
            $encpass = password_hash($password, PASSWORD_ARGON2ID);
            $code = rand(999999, 111111);
            $status = "notverified";
            $insert_data = "INSERT INTO users ( fname, lname, email, phone_no, password, code, status)
                            values('$fname','$lname', '$email','$phone_no', '$encpass', '$code', '$status')";
            $data_check = mysqli_query($con, $insert_data);
            if($data_check){
                $subject = "Email Verification Code";
                $message = "Your verification code is $code";
                if(mail($email, $subject, $message, $sender)){
                    $_SESSION['info'] = "We've sent a verification code to your email - $email";
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    header('location: verification');
                    exit();
                }else{
                    $_SESSION['error'] = "Failed while sending code!";
                }
            }else{
                $_SESSION['error'] = "Failed while inserting data into database!";
            }
        }

    }

    //if user click verification code submit button
    if(isset($_POST['check'])){
        $otp = $_POST['otp-1'] .$_POST['otp-2'].$_POST['otp-3'].$_POST['otp-4'].$_POST['otp-5'].$_POST['otp-6'];
        $otp_code = mysqli_real_escape_string($con, $otp);
        $check_code = "SELECT * FROM users WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE users SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['fname'] = $fname;
                $_SESSION['email'] = $email;
                header('location: ./dashboard/');
                exit();
            }else{
                $_SESSION['error'] = "Failed while updating code!";
            }
        }else{
            $_SESSION['error'] = "You've entered incorrect code!";
        }
    }

    //if user click login 
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_email = "SELECT * FROM users WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        
        if(mysqli_num_rows($res) > 0){

            $fetch = mysqli_fetch_assoc($res);

            $fetch_pass = $fetch['password'];
            $fetch_status = $fetch['curr_status'];
            if($fetch_status== 'Active'){
                if(password_verify($password, $fetch_pass)){

                    $_SESSION['email'] = $email;
                    $status = $fetch['status'];

                    if($status == 'verified'){

                    $_SESSION['fname'] = $fetch['fname'];
                    $_SESSION['name'] = $fetch['lname'];
                    $_SESSION['phone_no'] = $fetch['phone_no'];
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;

                    header('location: dashboard/');

                    }else{
                        $_SESSION['error'] = "It's look like your ".$email." haven't verified yet";
                        header('location: verification');
                    }
                }
                else{
                    $_SESSION['error'] = "Incorrect password!";
                }
            }
            else{
                $_SESSION['error'] = "Your Account Is Deactivated Please Contact With Your Supervisor";
            }

        }else{
           $_SESSION['error'] = "It's look like you're not yet a member!";
        }
    }     

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $query = "SELECT * FROM users WHERE email='$email'";
        $execute = mysqli_query($con, $query);
        $fetch_user = array();        
        
        if(mysqli_num_rows($execute) > 0){
            while($fetch = $execute->fetch_assoc()) {
                $fetch_user = $fetch;
            }
            $otp = rand(999999, 111111);
            $query = "UPDATE users SET code = $otp WHERE email = '$email'";
            $execute =  mysqli_query($con, $query);
            
            if($execute){
                $msg = "Account Resest (OTP) code ";
                email_reset_user($fetch_user['fname'],$fetch_user['lname'],$email,$msg,$otp);
            }else{
                $_SESSION['error'] = "Something went wrong!";
            }
        }else{
            $_SESSION['error'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $otp = $_POST['otp-1'] . $_POST['otp-2'].$_POST['otp-3'].$_POST['otp-4'].$_POST['otp-5'].$_POST['otp-6'];
        $otp_code = mysqli_real_escape_string($con, $otp );
        $check_code = "SELECT * FROM users WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;

            $_SESSION['info']= "Please create a new password that you didn't use it before";
            header('location: new-password');
            exit();
        }else{
            
            $_SESSION['error'] = "You've entered incorrect code! : " .$otp ;
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $_SESSION['error'] = "Confirm password not matched!";
        }
        else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_ARGON2ID);
            $update_pass = "UPDATE users SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $_SESSION['info'] = "Your password changed. Now you can login with your new password.";
                header('Location: ./');
            }else{
                $_SESSION['error'] = "Failed to change your password!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: ./index.php');
    }
    if(isset($_GET['page'])){
        if($_GET['page'] =='verification' || $_GET['page'] =='reset-code' || $_GET['page'] =='new-password')
        {
            $email = $_SESSION['email'];
            if($email == false)
                header('Location: ./index.php');
        }
        if($_GET['page'] =='password-changed')
        {
            if($_SESSION['info'] == false){
                header('Location: ./index.php');  
            }
        }
    }
    
?>