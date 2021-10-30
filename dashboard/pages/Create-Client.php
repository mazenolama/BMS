<?php require_once './Controllers/ClientController.php' ?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <form class="needs-validation" method="POST" autocomplete="off" action="index.php?page=Create-Client" novalidate="">
                            <div class="card-header">
                                <h4>Create Client</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="fname" placeholder="John" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write Client First Name !!</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="lname" placeholder="Doe" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write Client First Name !!</div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label>Email Address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="fas fa-at"></i></div>
                                            </div>
                                            <input type="Email" class="form-control" name="email" placeholder="something@example.com" required="">
                                        </div>
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback">Email Format is invalid.</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Phone Number</label>                                        
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                            </div>
                                            <input type="number" name="phone_no" placeholder="0555555555" required="" class="form-control phone-number">
                                        </div>
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write Client Phone Number !!</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control" name="companyName" placeholder="Google Company" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write Client Company Name !!</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Company URL (optional)</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-globe"></i></div>
                                            </div>
                                            <input type="url" name="companyURL" placeholder="www.example.com" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address" placeholder="1234 Name St, City Name" required=""></textarea>
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write Client Address !!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" type="submit" name="create-client">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>