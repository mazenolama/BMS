<?php require_once './Controllers/InvoiceController.php' ?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <form  >
                            <div class="card-header"  style="display: flex;justify-content: space-between;">
                                <h4>Invoice : #<?=$_GET['i_id']; ?></h4>
                                <?php if($user_info['role'] == 'Admin'): ?>
                                    <div style="text-align: right;">
                                        <a href="Edit-Invoice?i_id=<?=$_GET['i_id'];?>">
                                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit This Invoice">
                                                <i class="far fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="Invoice?action=delete-invoice&i_id=<?=$_GET['i_id'];?>">
                                            <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete This Invoice">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Invoice Title:</label>
                                        <label class="label-info"><?= $fetch_invoice['title'];?></label>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Client Name: </label>
                                        <label class="label-info"><?= $fetch_invoice['fname']. ' '. $fetch_invoice['lname'];?></label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Invoice Status: </label>
                                        <label class="label-info"><?= $fetch_invoice['invoice_status'];?></label>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Invoice Amount: </label>
                                        <label class="label-info"><?= $fetch_invoice['amount'];?></label>
                                    </div>
                               
                                </div>
                                <div class="form-group row">

                                    <div class="form-group col-md-6">
                                        <label class="label-title">Invoice Tax:</label>
                                        <label class="label-info"><?= $fetch_invoice['tax'];?> (<?=$fetch_invoice['tax_prg']; ?>%)</label> 
                                    </div>  
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Invoice Discount:</label>
                                        <label class="label-info"><?= $fetch_invoice['discount'];?> (<?= $fetch_invoice['discount_prg'];?>%)</label>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Invoice Total:</label>
                                        <label class="label-info"><?= $fetch_invoice['total'];?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Invoice Payment Date: </label>
                                        <label class="label-info"><?= $fetch_invoice['payment_date'];?></label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Invoice Created Date: </label>
                                        <label class="label-info"><?= $fetch_invoice['created_date'];?></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label class="label-title">Invoice Notes: </label>
                                        <label class="label-info"><?= $fetch_invoice['note'];?></label>
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