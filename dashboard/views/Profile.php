<div class="main-content" style="min-height: 600px;">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                    <form class="needs-validation" method="POST" autocomplete="off" action="index.php?page=Profile" novalidate="">
                            <div class="card-header">
                                <h4>Settings</h4>
                            </div>
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
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">First Name</label>
                                        <input type="text" class="form-control" value="<?= $user_info['fname'];?>" name="fname" placeholder="John" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write User First Name !!</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Last Name</label>
                                        <input type="text" class="form-control" value="<?= $user_info['lname'];?>" name="lname" placeholder="Doe" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write User First Name !!</div>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Email Address</label>
                                        <input type="Email" class="form-control" name="email" value="<?= $user_info['email'];?>" placeholder="something@example.com" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback">Email Format is invalid.</div>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Passowrd</label>                                        
                                        <input id="password" type="password" placeholder=" " class="form-control pwstrength" data-indicator="pwindicator" name="password" tabindex="2">
                                        <span style="font-style: italic; color:red; font-size: 12px;">*Leave This Field Empty If You Don't Want To Change The Password*</span>                                   
                                    </div>
                                    
                                </div>
                                
                                <div class="form-group row">

                                    <?php if($user_info['role']=='Admin'){ ?>
                                        <div class="form-group col-md-6">
                                            <label class="label-title">Role : </label>
                                            <select class="form-control selectric" name="role" required>
                                                <option disabled>-------------------------- Select User Role ---------------------------</option>
                                                <option value="Admin"<?php if($user_info['role']=='Admin'){echo 'selected="selected"';}?> >Admin</option>
                                                <option value="Standard" <?php if($user_info['role']=='Standard'){echo 'selected="selected"';} ?> >Standard</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="label-title">User Status :</label>
                                            <select class="form-control selectric" name="curr_status" required>
                                                <option value="Active" <?php if($user_info['curr_status']=='Active') echo 'selected="selected"'; ?> >Active</option>
                                                <option value="Inactive" <?php if($user_info['curr_status']=='Inactive') echo 'selected="selected"'; ?> >Inactive</option>
                                            </select>
                                        </div>
                                    <?php } ?>

                                    <?php if($user_info['role']=='Standard'){ ?>
                                        <div class="form-group col-md-6">
                                            <label class="label-title">Role : </label>
                                            <select class="form-control selectric" name="role" required>
                                                <option selected="selected"><?= $user_info['role']?></option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="label-title">User Status :</label>
                                            <select class="form-control selectric" name="curr_status" required>
                                                <option  selected="selected"><?= $user_info['curr_status']?></option>
                                            </select>
                                        </div>
                                    <?php } ?>

                                </div>
                                <div class="form-group row">

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Phone Number</label>
                                        <input type="number" class="form-control" name="phone_no" value="<?= $user_info['phone_no'];?>" placeholder="0555555555" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write User Phone Number !!</div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" type="submit" name="update-profile">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>