

<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Reset Password</h4>
                    </div>
                    <div class="text-center mt-1">
                        <img src="assets/img/logo.png" height="90" width="90"  alt="...">
                        <h3 style="font-family: cursive;font-size: 1.4rem;color: #121212eb;">Hadef Bills</h3>
                    </div>
                    <div class="card-body">
                        <?php 
                            if(isset($_SESSION['info'])){
                                ?>
                                <div class="alert alert-success text-center">
                                    <?php echo $_SESSION['info']; ?>
                                </div>
                                <?php
                            }
                            ?>
                            <?php
                            if(count($errors) > 0){
                                ?>
                                <div class="alert alert-danger text-center">
                                    <?php
                                    foreach($errors as $showerror){
                                        echo $showerror;
                                    }
                                    ?>
                                </div>
                        <?php
                            }
                        ?>
                        <p class="text-muted">Enter Your New Password</p>
                        <form method="POST" action="index.php?page=new-password" autocomplete="off">
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" tabindex="2" required>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="cpassword" tabindex="2" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="change-password" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Reset Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>