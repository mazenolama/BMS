<?php
    require_once("database/Database.php");
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
?>