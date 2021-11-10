    <!-----------------  Clients DataTable   ----------------->
    <?php 
      if($path == 'Clients' ||  $path == 'Dashboard')
        include_once('views/clients/clients-table.php');
    ?>
    <!----------------- Clients DataTable   ----------------->

    <!-----------------  Users DataTable   ----------------->
    <?php 
      if($path =='Users' )
        include_once('views/users/users-table.php'); 
    ?>
    <!----------------- Users DataTable   ----------------->

    <!-----------------  Invoices DataTable   ----------------->
    <?php 
      if($path =='Invoices' )
        include_once('views/invoices/invoices-table.php'); 
    ?>
    <!----------------- Invoices DataTable   ----------------->

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