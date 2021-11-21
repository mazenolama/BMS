<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <div class="card card-primary" style=" height: 450px;">
                    <div class="card-header">
                        <h4>Email Verification</h4>
                    </div>
                    <div class="text-center mt-1">
                        <img src="assets/img/logo.png" height="90" width="90"  alt="...">
                        <h3 style="font-family: cursive;font-size: 1.4rem;color: #121212eb;">Hadef Bills</h3>
                    </div>
                    <div class="card-body">
                        <?php 
                            if(isset($_SESSION['info'])){
                                ?>
                                <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
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
                        <p class="text-muted">Please enter the 6-digit verification code we sent via Email:</p>
                        <form action="verification" method="POST" autocomplete="off">
                            <div class="d-flex flex-row mt-5">
                                <input type="number" name="otp-1"class="form-control otp" autofocus="">
                                <input type="number" name="otp-2" class="form-control otp">
                                <input type="number" name="otp-3" class="form-control otp">
                                <input type="number" name="otp-4" class="form-control otp">
                                <input type="number" name="otp-5" class="form-control otp">
                                <input type="number" name="otp-6" class="form-control otp">
                            </div>
                            <div class="text-center mt-5">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="check" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Verify
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

