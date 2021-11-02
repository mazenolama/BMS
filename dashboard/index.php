<?php 
require_once('./vendor/autoload.php');
require_once('./Controllers/HomeController.php'); 

if(isset($_GET['action'])=='delete-user')
  {
      if($_GET['u_id']){
          $u_id= $_GET['u_id'];
          $notfiy = 'Has Deleted A User';
          $query = "DELETE FROM `users` WHERE id='$u_id';";
          $query .="INSERT INTO notifications (notify, status , user_id , userName) VALUES ('$notfiy', 'unread' ,'$user_id', '$full_name')";
          $execute = mysqli_multi_query($con, $query);
          if($execute){
              $_SESSION['success'] = 'Deleted A User Successfully';
              die("<script>window.location = 'index.php?page=View-Users';</script>");
          }
          else{
              $_SESSION['error'] = 'Failed To Delete A User';
          }
      }
      else
          $_SESSION['error'] = 'Failed To Get User ID';
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- CSS & Title & Links -->
    <?php include_once('./views/helper/head.php') ?>
    <!-- CSS & Title & Links -->
  </head>

  <body>
    <div class="loader"></div>

    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        <!-- Navbar -->
        <?php include_once('./views/layout/navbar.php') ?>
        <!-- Navbar -->

        <!-- Sidebar -->
        <?php include_once('./views/layout/sidebar.php') ?>
        <!-- Sidebar -->

        <!-- Main Content -->
        <?php 
          if(isset($_GET['page']))
              include ('./views/'.$_GET['page'] . '.php');
          else
              include_once('./views/dashboard.php' );
        ?>
        <!-- Main Content -->

        <!-- Footer -->
        <?php include_once('./views/layout/footer.php') ?>
        <!-- Footer -->

      </div>
    </div>
    
    <!-- JS scripts -->
    <?php include_once('./views/helper/scripts.php') ?>
    <!-- JS scripts -->
    
    <!-- JS scripts Specific Conditions -->
    <?php include_once('./views/helper/conditions.php') ?>
    <!-- JS scripts Specific Conditions -->

  </body>

</html>