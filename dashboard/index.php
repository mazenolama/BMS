<?php 
require_once('../vendor/autoload.php');
require_once('../database/config.php');
require_once('./Controllers/HomeController.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- CSS & Title & Links -->
    <?php include_once('./pages/helper/head.php') ?>
    <!-- CSS & Title & Links -->
  </head>

  <body>
    <div class="loader"></div>

    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        <!-- Navbar -->
        <?php include_once('./pages/layout/navbar.php') ?>
        <!-- Navbar -->

        <!-- Sidebar -->
        <?php include_once('./pages/layout/sidebar.php') ?>
        <!-- Sidebar -->

        <!-- Main Content -->
        <?php 
          if(isset($_GET['page']))
              include ('./pages/'.$_GET['page'] . '.php');
          else
              include_once('./pages/dashboard.php' );
        ?>
        <!-- Main Content -->

        <!-- Footer -->
        <?php include_once('./pages/layout/footer.php') ?>
        <!-- Footer -->

      </div>
    </div>

    <!-- JS scripts -->
    <?php include_once('./pages/helper/scripts.php') ?>
    <!-- JS scripts -->
    
    <script>
 /*
      document.getElementById("flush").addEventListener("click",myFunction );
      function myFunction() {
        <?php //flushCount(); ?>
      }*/

      /****************   Tostar Alert Success    *****************/
        <?php if (isset($_SESSION['success'])): ?>
          iziToast.success({
            message: "<?= $_SESSION['success'] ?>",
            position: 'topCenter'
          });
        <?php endif ?>
        <?php unset($_SESSION['success']); ?>
      /****************   Tostar Alert Success   *****************/

      /****************   Tostar Alert Error   *****************/
      <?php if (isset($_SESSION['error'])): ?>
          iziToast.error({
            message: "<?= $_SESSION['error'] ?>",
            position: 'topCenter'
          });
        <?php endif ?>
        <?php unset($_SESSION['error']); ?>
      /****************   Tostar Alert  Error  *****************/

      /****************  Clients DataTable   *****************/
     
        var data = [];
        <?php foreach($fetch_clients as $fetch): ?>
            data.push([
              '<?= $fetch['id'];?>', 
              '<?= $fetch['fname'].' '. $fetch['lname'] ;?>',
              '<?= $fetch['email']; ?>',
              '<?= $fetch['phone_no'];?>',
              '<?= $fetch['companyName'];?>',
              '<?= time_elapsed_string($fetch['created_at'],true);?>',
              '<?= $fetch['created_at'];?>',
              '<?= $fetch['updated_at'];?>',
            ]);
          <?php endforeach ?>
          $('#clients-table').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'excel', 'pdf', 'print'],
            data: data,
          });
          $('#clients-table').on( 'click', 'tbody tr', function () {
            var id = $(this).children('.sorting_1').eq(0).text(); 
            window.location= 'index.php?page=Client&c_id='+id;
          } );
        /**************** Clients DataTable   *****************/

    </script>
    
  </body>
</html>