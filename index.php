<?php 
require_once('./vendor/autoload.php');
require_once('./database/config.php');
require_once('./Controllers/AuthController.php'); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once('./helper/head.php'); ?>
    </head>
    <body>
        <div class="loader"></div>
        <!---------------- Main Content ----------------->
            <div class="app bg_one" >
                <?php 
                    if(isset($_GET['page']))
                        include('./pages/'.$_GET['page'] . '.php');
                    else
                        include('./pages/login.php' );
                ?>
            </div>
        <!---------------- Main Content ----------------->
        <?php include_once('./helper/scripts.php'); ?>
    </body>
</html>