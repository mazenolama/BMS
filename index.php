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
                    if($path =='bills')
                        include ('./pages/login.php');
                    else
                        include ('./pages/'. $path . '.php');

                ?>
            </div>
        <!---------------- Main Content ----------------->
        <?php include_once('./helper/scripts.php'); ?>
    </body>
</html>