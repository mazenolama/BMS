<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <div class="card card-primary" style=" height: 450px;">
                    <div class="card-header">
                        <h4>Forgot Password</h4>
                    </div>
                    <div class="text-center mt-1">
                        <img src="assets/img/logo.png" height="90" width="90"  alt="...">
                        <h3 style="font-family: cursive;font-size: 1.4rem;color: #121212eb;">Hadef Bills</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Please enter the 6-digit verification code we sent via Email:</p>
                        <form action="reset-code" method="POST" autocomplete="">
                            <div class="mb-6 text-center">
                                <div id="otp" class="flex justify-center">
                                    <input class="m-2 text-center otp otp-solid rounded focus:border-blue-400 focus:shadow-outline" name="otp-1" type="text" id="first" maxlength="1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                    <input class="m-2 text-center otp otp-solid rounded focus:border-blue-400 focus:shadow-outline" name="otp-2" type="text" id="second" maxlength="1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                    <input class="m-2 text-center otp otp-solid rounded focus:border-blue-400 focus:shadow-outline" name="otp-3" type="text" id="third" maxlength="1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                    <input class="m-2 text-center otp otp-solid rounded focus:border-blue-400 focus:shadow-outline" name="otp-4" type="text" id="fourth" maxlength="1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                    <input class="m-2 text-center otp otp-solid rounded focus:border-blue-400 focus:shadow-outline" name="otp-5" type="text" id="fifth" maxlength="1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                    <input class="m-2 text-center otp otp-solid rounded focus:border-blue-400 focus:shadow-outline" name="otp-6" type="text" id="sixth" maxlength="1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                </div>
                            </div>
                            <div class="text-center mt-5">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="check-reset-otp" class="btn btn-primary btn-lg btn-block" tabindex="4">
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

