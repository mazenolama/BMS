<!-- General JS Scripts -->
<script src="assets/js/app.min.js"></script>

<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/google.js"></script>

<!-- Page Specific JS File -->
<script src="assets/js/auth-register.js"></script>

<?php if(isset($_GET['page'])): $page = $_GET['page']; if(($page=='reset-code')||($page=='verification')): ?>
    <script src="assets/js/otp.js"></script>
<?php endif; endif;?>