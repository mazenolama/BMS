    <!-----------------  Clients DataTable   ----------------->
    <?php 
      if(!isset($_GET['page']))
        include_once('views/clients/clients-table.php');

      if(isset($_GET['page']) && $_GET['page'] == 'View-Clients')
        include_once('views/clients/clients-table.php');
    ?>
    <!----------------- Clients DataTable   ----------------->

    <!-----------------  Users DataTable   ----------------->
    <?php 
      if(isset($_GET['page']) && $_GET['page']=='View-Users' )
        include_once('views/users/users-table.php'); 
    ?>
    <!----------------- Users DataTable   ----------------->

    <script>
      /****************   Tostar Alert Success    *****************/
        <?php if (isset($_SESSION['success'])): ?>
          iziToast.success({
            message: "<?= $_SESSION['success'] ?>",
            position: 'topCenter'
          });
        <?php endif; ?>
        <?php unset($_SESSION['success']); ?>
      /****************   Tostar Alert Success   *****************/

      /****************   Tostar Alert Error   *****************/
        <?php if (isset($_SESSION['error'])): ?>
            iziToast.error({
              message: "<?= $_SESSION['error'] ?>",
              position: 'topCenter'
            });
        <?php endif; ?>
        <?php unset($_SESSION['error']); ?>
      /****************   Tostar Alert  Error  *****************/
    </script>