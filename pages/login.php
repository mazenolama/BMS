
<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <div class="card card-primary">
                <div class="card-header" style="display: block;">
                    <div class="text-center mt-3">
                        <img src="assets/img/logo.png" height="90" width="90"  alt="...">
                        <h3 style="font-family: cursive;font-size: 1.4rem;color: #121212eb;">Hadef Bills</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="index.php" autocomplete="" class="needs-validation" novalidate="">
                        <?php 
                            if( isset($_SESSION['info']) == true && count($errors) == 0){
                                ?>
                                <div class="alert alert-success text-center">
                                    <?php echo $_SESSION['info']; ?>
                                </div>
                                <?php
                            }
                            ?>
                        <?php 
                            if(count($errors) > 0) { ?>
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
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                            <div class="invalid-feedback">
                                Please fill in your email
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                                <div class="float-right">
                                    <a href="forgot-password" class="text-small">
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                            <div class="invalid-feedback">
                                please fill in your password
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="login" tabindex="4">
                                Login
                            </button>
                        </div>
                    </form>
                    <!-- <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div> -->

                    <div class="mt-5 text-muted text-center">
                        Don't have a Hadef Bills account?
                        <a href="signup">Sign Up Now</a>
                    </div>
                </div>
               
            </div>
            
        </div>
    </div>
</section>