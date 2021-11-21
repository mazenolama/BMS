<div class="col-md-4 offset-md-4 form login-form">
    <?php 
    if(isset($_SESSION['info'])){
        ?>
        <div class="alert alert-success text-center">
        <?php echo $_SESSION['info']; ?>
        </div>
        <?php
    }
    ?>
    <form action="login" method="POST">
        <div class="form-group">
            <input class="form-control button" type="submit" name="login-now" value="Login Now">
        </div>
    </form>
</div>