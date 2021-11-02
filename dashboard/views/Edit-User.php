<?php 
require_once './Controllers/ClientController.php';
?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <form class="needs-validation" method="POST" autocomplete="off" action="index.php?page=Edit-User&u_id=<?= $_GET['u_id'];?>" novalidate="">
                            <div class="card-header">
                                <h4>Update User</h4>
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
                                        <input type="text" class="form-control" value="<?= $fetch_user['fname'];?>" name="fname" placeholder="John" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write User First Name !!</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Last Name</label>
                                        <input type="text" class="form-control" value="<?= $fetch_user['lname'];?>" name="lname" placeholder="Doe" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write User First Name !!</div>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Email Address</label>
                                        <input type="Email" class="form-control" name="email" value="<?= $fetch_user['email'];?>" placeholder="something@example.com" required="">
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
                                    
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Role : </label>
                                        <select class="form-control selectric" name="role" required>
                                            <option disabled>-------------------------- Select User Role ---------------------------</option>
                                            <option value="Admin"<?php if($fetch_user['role']=='Admin'){echo 'selected="selected"';}?> >Admin</option>
                                            <option value="Standard" <?php if($fetch_user['role']=='Standard'){echo 'selected="selected"';} ?> >Standard</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label class="label-title">User Status :</label>
                                        <select class="form-control selectric" name="curr_status" required>
                                            <option disabled>-------------------------- Select User Status -------------------------</option>
                                            <option value="Active" <?php if($fetch_user['curr_status']=='Active') echo 'selected="selected"'; ?> >Active</option>
                                            <option value="Inactive" <?php if($fetch_user['curr_status']=='Inactive') echo 'selected="selected"'; ?> >Inactive</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Phone Number</label>
                                        <input type="number" class="form-control" name="phone_no" value="<?= $fetch_user['phone_no'];?>" placeholder="0555555555" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write User Phone Number !!</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Notes</label>
                                        <textarea class="form-control" name="notes" ><?= $fetch_user['notes'];?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" type="submit" name="update-user">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>