<div class="main-content" style="min-height: 600px;">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                    <form class="needs-validation" method="POST" autocomplete="off" action="Settings" novalidate="">
                            <div class="card-header">
                                <h4>Company Settings</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Company Name</label>
                                        <input type="text" class="form-control" value="<?php if($fetch_company) echo $fetch_company['name'] ?>" name="name" placeholder="Google" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write Company Name !!</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Company Email Address</label>
                                        <input type="email" class="form-control" name="email" value="<?php if($fetch_company) echo $fetch_company['email'] ?>" placeholder="something@company.com" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback">Invalid Email Format !!</div>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Company Address</label>
                                        <input type="text" class="form-control" name="address" value="<?php if($fetch_company) echo $fetch_company['address'] ?>" placeholder="24, 6959 King Abdul Aziz Branch Rd, Riyadh 12467, KSA" required="">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Company Phone Number</label>
                                        <input type="number" class="form-control" name="phone" value="<?php if($fetch_company) echo $fetch_company['phone'] ?>" placeholder="0555555555" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write Your Company Phone Number !!</div>
                                    </div>
                                    
                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" type="submit" name="update-company-info">Save</button>
                                <!--<button class="btn btn-primary" type="submit" name="insert-company-info">Save</button>-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>