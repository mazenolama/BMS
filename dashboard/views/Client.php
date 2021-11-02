<?php require_once './Controllers/ClientController.php' ?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <form  >
                            <div class="card-header"  style="display: flex;justify-content: space-between;">
                                <h4>Client : #<?=$_GET['c_id']; ?></h4>
                                <?php if($user_info['role'] == 'Admin'): ?>
                                    <div style="text-align: right;">
                                        <a href="index.php?page=Edit-Client&c_id=<?=$_GET['c_id'];?>">
                                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit This Client">
                                                <i class="far fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="index.php?page=Client&action=delete-client&c_id=<?=$_GET['c_id'];?>">
                                            <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete This Client">
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
                                        <label class="label-info"><?= $fetch_client['fname'];?></label>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Last Name: </label>
                                        <label class="label-info"><?= $fetch_client['lname'];?></label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Email Address: </label>
                                        <label class="label-info"><?= $fetch_client['email'];?></label>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Phone Number: </label>
                                        <label class="label-info"><?= $fetch_client['phone_no'];?></label> 
                                    </div>                                   
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Company Name: </label>
                                        <label class="label-info"><?= $fetch_client['companyName'];?></label>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Company URL: </label>
                                        <label class="label-info"><?= $fetch_client['companyURL'];?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Address: </label>
                                        <label class="label-info"><?= $fetch_client['address'];?></label>
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