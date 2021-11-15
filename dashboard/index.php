<?php 
require_once('./vendor/autoload.php');
require_once('./Controllers/HomeController.php'); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- CSS & Title & Links -->
    <?php include_once('./views/helper/head.php'); ?>
    <!-- CSS & Title & Links -->
  </head>

  <body>
    <div class="loader"></div>

    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        <!-- Navbar -->
        <?php include_once('./views/layout/navbar.php'); ?>
        <!-- Navbar -->

        <!-- Sidebar -->
        <?php include_once('./views/layout/sidebar.php'); ?>
        <!-- Sidebar -->

        <!-- Main Content -->
        <?php include ('./views/'. $path . '.php');?>
        <!-- Main Content -->

        <!-- Footer -->
        <?php include_once('./views/layout/footer.php'); ?>
        <!-- Footer -->

      </div>
    </div>
    
    <!-- JS scripts -->
    <?php include_once('./views/helper/scripts.php'); ?>
    <!-- JS scripts -->
    
    <!-- JS scripts Specific Conditions -->
    <?php include_once('./views/helper/conditions.php') ?>
    <!-- JS scripts Specific Conditions -->

  </body>

</html>