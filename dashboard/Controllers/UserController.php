<?php
    require_once("database/Database.php");
    require_once("Controllers/email/mail.php");
    $con = dbConnection();
    $errors = array();

    /***************         Get All Users               ***************/
        $query = "SELECT * FROM `users` WHERE 1 ORDER BY created_at DESC";
        $execute = mysqli_query($con, $query);
        $fetch_users = array();
        if($execute){
            if(mysqli_num_rows($execute) > 0){
                while($fetch = $execute->fetch_assoc()) {
                    $fetch_users [] = $fetch;
                }
            }
            else{
                $errors['get_users'] = 'No Data To Show';
            }
        }
        else{
            $errors['get_users'] = 'Failed To Get Info. From Database';
        }
    /***************         Get All Users               ***************/

    /***************         Create New User             ***************/
        if(isset($_POST['create-user'])){
            $fname_user = mysqli_real_escape_string($con,$_POST['fname']);
            $lname_user = mysqli_real_escape_string($con,$_POST['lname']);
            $email_user = mysqli_real_escape_string($con,$_POST['email']);
            $phone_no_user = mysqli_real_escape_string($con,$_POST['phone_no']);
            $role_user = mysqli_real_escape_string($con,$_POST['role']);
            $curr_status_user = mysqli_real_escape_string($con,$_POST['curr_status']);
            $password_user = mysqli_real_escape_string($con,$_POST['password']);
            $notes_user = mysqli_real_escape_string($con,$_POST['notes']);
            $password_user= password_hash($password_user, PASSWORD_ARGON2ID);

            if(!empty($fname_user) && !empty($password_user) && !empty($email_user) && !empty($phone_no_user)){
                $notfiy = 'Has Created Added A New User';
                $query = " INSERT INTO users (fname, lname, email, phone_no, password, code, status, role, curr_status, notes)
                VALUES ('$fname_user', '$lname_user', '$email_user', '$phone_no_user','$password_user','0','verified', '$role_user', '$curr_status_user', '$notes_user');";
                $query .="INSERT INTO notifications (notify, status , user_id , userName) VALUES ('$notfiy', 'unread' ,'$user_id', '$full_name')";

                if(mysqli_multi_query($con, $query)){
                    $_SESSION['success'] = 'Created A New User Successfully';
                    email_new_user($fname_user,$lname_user,$email_user,$_POST['password'],$full_name);  
                }
                else{
                    $_SESSION['error'] = 'Failed To Create A New User';
                } 
            }
            else{
                $_SESSION['error'] = 'Please Make Sure You Filled The Required Fields';
            }
        }
    /***************         Create New User             ***************/
    
    /***************        Update Existing User              ***************/
        if(isset($_GET['u_id'])){

            $u_id= $_GET['u_id'];
            $query = "SELECT * FROM users WHERE id='$u_id'";
            $execute = mysqli_query($con, $query);
            $fetch_user = array();

            if($execute){

                if(mysqli_num_rows($execute) > 0){

                    $fetch_user = $execute->fetch_assoc();
                    
                    if(isset($_POST['update-user'])){
                        $datetime = date_create()->format('Y-m-d H:i:s');
                        $notfiy = 'Has Updated An Existing User';

                        $fname_user = mysqli_real_escape_string($con,$_POST['fname']);
                        $lname_user = mysqli_real_escape_string($con,$_POST['lname']);
                        $email_user = mysqli_real_escape_string($con,$_POST['email']);
                        $phone_no_user = mysqli_real_escape_string($con,$_POST['phone_no']);
                        $role_user = mysqli_real_escape_string($con,$_POST['role']);
                        $curr_status_user = mysqli_real_escape_string($con,$_POST['curr_status']);
                        $notes_user = mysqli_real_escape_string($con,$_POST['notes']);
                        $password_user = mysqli_real_escape_string($con,$_POST['password']);
                                                
                        if(!empty($fname_user) && !empty($email_user) && !empty($phone_no_user)){
                            
                            if(!empty($password_user)){
                                $password_user= password_hash($password_user, PASSWORD_ARGON2ID);

                                $query  = "UPDATE users SET fname='$fname_user',lname='$lname_user',
                                            email='$email_user',phone_no='$phone_no_user',notes='$notes_user',
                                            role='$role_user', curr_status='$curr_status_user', password='$password_user',
                                            updated_at='$datetime' WHERE id='$u_id';";
                            }
                            else{
                                $query  = "UPDATE users SET fname='$fname_user',lname='$lname_user',
                                            email='$email_user',phone_no='$phone_no_user',notes='$notes_user',
                                            role='$role_user', curr_status='$curr_status_user',updated_at='$datetime' 
                                            WHERE id='$u_id';";
                            }

                            $query .="INSERT INTO notifications (notify, status , user_id , userName) VALUES ('$notfiy', 'unread' ,'$user_id', '$full_name')";
                            
                            if(mysqli_multi_query($con, $query)){
                                $_SESSION['success'] = 'Updated An Existing User Successfully';
                                die("<script>window.location = 'index.php?page=View-Users'; window.reload();</script>");
                            }
                            else{
                                $_SESSION['error'] = 'Failed To Updated An Existing User';
                            }
                            
                        }
                        else{
                            $_SESSION['error'] = 'Please Make Sure You Filled The Required Fields';
                        }
                    }
                }
                else{
                    $errors['get_user'] = 'No Data To Show For This User';
                }
            }
            else{
                $errors['get_user'] = 'Failed To Get Info. From Database';
            }
        }
    /***************        Update Existing User              ***************/

    /***************        Delete User              ***************/

        
        
    /***************        Delete User              ***************/
    
?>