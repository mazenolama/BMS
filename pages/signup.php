
<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="index.php?page=signup" autocomplete="">
                        <?php 
                            if(count($errors) > 0) { ?>
                                <div class="alert alert-danger text-center">
                                    <?php
                                    foreach($errors as $showerror){
                                        echo $showerror .'<br>';
                                    }
                                    ?>
                                </div>
                            <?php
                            }
                        ?>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="frist_name">First Name</label>
                                    <input id="frist_name" type="text" class="form-control" placeholder="Jone" name="fname" required autofocus>
                                </div>
                                <div class="form-group col-6">
                                    <label for="last_name">Last Name</label>
                                    <input id="last_name" type="text" class="form-control" placeholder="Doe" name="lname" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" placeholder="somthing@example.com" required name="email">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group col-6">
                                    <label for="phoneNo"> Phone Number</label>
                                    <input id="phone_no" type="number" class="form-control" placeholder="0555555555" required name="phone_no">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="password" class="d-block">Password</label>
                                    <input id="password" type="password" class="form-control pwstrength" required data-indicator="pwindicator"
                                    name="password">
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label for="password2" class="d-block">Password Confirm</label>
                                    <input id="password2" type="password" class="form-control" required name="cpassword">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                    <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="signup" class="btn btn-primary btn-lg btn-block">Register</button>
                            </div>
                        </form>
                        <!--<div class="text-center mt-4 mb-3">
                            <div class="text-job text-muted">Register With Social</div>
                                <div class="row sm-gutters" style="display: inline-block; margin-top: 5px;">
                                    <div class="g-signin2"  data-onsuccess="onSignIn" data-theme="light"></div>
                                </div>
                            </div>
                        </div>-->
                    <div class="mb-4 text-muted text-center">Already Registered? <a href="./index.php">Login</a></div>
                </div>
            </div>
        </div>
    </div>
</section>