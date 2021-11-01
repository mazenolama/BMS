<?php require_once './Controllers/UserController.php' ?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <form class="needs-validation" method="POST" autocomplete="off" action="index.php?page=Create-User" novalidate="">
                            <div class="card-header">
                                <h4>Create User</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">First Name</label>
                                        <input type="text" class="form-control" name="fname" placeholder="John" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write User First Name !!</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Last Name</label>
                                        <input type="text" class="form-control" name="lname" placeholder="Doe" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write User First Name !!</div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Email Address</label>
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
                                        
                                        <label class="label-title">Passowrd</label>                                        
                                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" tabindex="2" required="">                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write User Password !!</div>
                                    </div>
  
                                </div>
                                <div class="form-group row">
                                    
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Role : </label>
                                        <select class="form-control selectric" name="role" required>
                                            <option >Select User Role</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Standard">Standard</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label class="label-title">User Status :</label>
                                        <select class="form-control selectric" name="curr_status" required>
                                            <option>Select User Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Phone Number</label>                                        
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                            </div>
                                            <input type="number" name="phone_no" placeholder="0555555555" required="" class="form-control phone-number">
                                        </div>
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write User Phone Number !!</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Notes</label>
                                        <textarea class="form-control" name="notes"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" type="submit" name="create-user">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>