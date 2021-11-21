
<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Forgot Password</h4>
                    </div>
                    <div class="text-center mt-1">
                        <img src="assets/img/logo.png" height="90" width="90"  alt="...">
                        <h3 style="font-family: cursive;font-size: 1.4rem;color: #121212eb;">Hadef Bills</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">We'll email you a One Time Password (OTP) to reset your password</p>
                        <form action="forgot-password" method="POST" autocomplete="">

                            <div class="form-group">
                                <label for="email">Enter your email address</label>
                                <input id="email" type="email" class="form-control" name="email" tabindex="1" placeholder="something@example.com"  required autofocus>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="check-email" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Continue
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>