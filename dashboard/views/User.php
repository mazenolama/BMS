<?php require_once './Controllers/UserController.php' ?>

<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <form  >
                            <div class="card-header"  style="display: flex;justify-content: space-between;">
                                <h4>User : #<?=$_GET['u_id']; ?></h4>
                                
                                <?php if($user_info['role'] == 'Admin'): ?>

                                    <div style="text-align: right;">
                                        <a href="Edit-User?u_id=<?=$_GET['u_id'];?>">
                                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit This User">
                                                <i class="far fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="User?action=delete-user&u_id=<?=$_GET['u_id'];?>">
                                            <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete This User">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </a>
                                    </div>
                                    
                                <?php endif; ?>

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
                                        <label class="label-title">First Name:</label>
                                        <label class="label-info"><?= $fetch_user['fname'];?></label>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Last Name: </label>
                                        <label class="label-info"><?= $fetch_user['lname'];?></label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Email Address: </label>
                                        <label class="label-info"><?= $fetch_user['email'];?></label>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Phone Number: </label>
                                        <label class="label-info"><?= $fetch_user['phone_no'];?></label> 
                                    </div>                                   
                                </div>

                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Role: </label>
                                        <label class="label-info"><?= $fetch_user['role'];?></label>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Status: </label>
                                        <?php if($fetch_user['curr_status']=='Active'): ?>
                                            <label class="label-info"><span class="badge badge-success">Actived</span></label>
                                        <?php endif; ?>
                                        <?php if($fetch_user['curr_status']=='Inactive'): ?>
                                            <label class="label-info"> <span class="badge badge-danger">Deactivated</span></label>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Notes: </label>
                                        <label class="label-info"><?= $fetch_user['notes'];?></label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>