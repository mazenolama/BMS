<?php
    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/../../');
    $dotenv->load();
    session_start();
    $con = dbConnection();

    $errors = array();
    /***************    Checking Vaild Authorization       ***************/
        $email = $_SESSION['email'];
        unset ($_SESSION["password"]);
        if(!empty($email)){
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $row = mysqli_query($con, $sql);
            if($row){
                $fetch_info = mysqli_fetch_assoc($row);
                $fname_user = $fetch_info['fname'];
                $lname_user = $fetch_info['lname'];
                $fname_letter= ucfirst($fname_user[0]);
                $lname_letter= ucfirst($lname_user[0]);
                $phone_no = $fetch_info['phone_no'];

                $userName =$fname_user .' ' . $lname_user;
            }
        }
        else{
            header('Location: ../index.php');
        }
    /***************    Checking Vaild Authorization       ***************/

    /***************        Get Notifications              ***************/
        
        $query = "SELECT * FROM `notifications` WHERE 1 ORDER BY created_at DESC";
        $execute = mysqli_query($con, $query);
        $fetch_notify = array();
        if($execute || isset($_SESSION['success'])){
            if(mysqli_num_rows($execute) > 0){
                while($fetch = $execute->fetch_assoc()) {
                    $fetch_notify [] =$fetch;
                }
            }
            else{
                $errors['notifications'] = 'No Data To Show';
            }
        }
        else{
            $errors['notifications'] = 'Failed To Get Info. From Database';
        }

    /***************        Get Notifications              ***************/

    /***************         Logout        ***************/    
        if(isset($_POST['logout'])){
            session_unset();
            session_destroy();
            header('Location: index.php');
        }
    /***************         Logout         ***************/

    /**************  Get Page Name Function ***************/
        function pageName(){
            if(isset($_GET['page']))
                echo $_GET['page'];
            else
                echo 'Dashboard' ;
        }
    /**************  Get Page Name Function ***************/

    /*************  Calculate Total Time Ago Function      ***************/
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
    /*************  Calculate Total Time Ago Function      ***************/

?>