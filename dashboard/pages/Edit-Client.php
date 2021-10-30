<?php require_once './Controllers/ClientController.php' ?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <form class="needs-validation" method="POST" autocomplete="off" action="index.php?page=Edit-Client&c_id=<?= $_GET['c_id'];?>" novalidate="">
                            <div class="card-header">
                                <h4>Update Client</h4>
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
                                        <label>First Name</label>
                                        <input type="text" class="form-control" value="<?= $fetch_client['fname'];?>" name="fname" placeholder="John" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write Client First Name !!</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" value="<?= $fetch_client['lname'];?>" name="lname" placeholder="Doe" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write Client First Name !!</div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label>Email Address</label>
                                        <input type="Email" class="form-control" name="email" value="<?= $fetch_client['email'];?>" placeholder="something@example.com" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback">Email Format is invalid.</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Phone Number</label>
                                        <input type="number" class="form-control" name="phone_no" value="<?= $fetch_client['phone_no'];?>" placeholder="0555555555" required="">
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write Client Phone Number !!</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control" name="companyName" value="<?= $fetch_client['companyName'];?>" placeholder="Google Company" required="">
                                        <div class="valid-feedback">Email is invalid.</div>
                                        <div class="invalid-feedback"> Please Write Client Company Name !!</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Company URL</label>
                                        <input type="text" name="companyURL" placeholder="www.example.com (optional)" value="<?= $fetch_client['companyURL'];?>" class="form-control" ></input>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address" placeholder="1234 Name St, City Name" required=""><?= $fetch_client['address'];?></textarea>
                                        <div class="valid-feedback"></div>
                                        <div class="invalid-feedback"> Please Write Client Address !!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" type="submit" name="update-client">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>