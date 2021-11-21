<!-- General JS Scripts -->
<script src="assets/js/app.min.js"></script>

<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/google.js"></script>
<script src="assets/bundles/izitoast/js/iziToast.min.js"></script>

<script>
    /****************   Tostar Alert Success    *****************/
    <?php if (isset($_SESSION['info'])): ?>
        iziToast.success({
        message: "<?= $_SESSION['info'] ?>",
        position: 'topCenter'
        });
    <?php endif; ?>
    <?php unset($_SESSION['info']); ?>
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

<?php if(isset($_GET['page'])): $page = $_GET['page']; if(($page=='reset-code')||($page=='verification')): ?>
    <script src="assets/js/otp.js"></script>
<?php endif; endif;?>