<?php require_once './Controllers/InvoiceController.php' ?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Invoice</h4>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="POST" autocomplete="off" action="Edit-Invoice?i_id=<?= $_GET['i_id'];?>" novalidate="">
                                
                                <div class="divider">Invoice Information</div>
                                <fieldset>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label class="label-title">Invoice Title<span class="red">*</span></label>
                                            <input type="text" class="form-control" name="title" value="<?=$fetch_invoice['title'];?>" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="label-title">Client Name : </label>
                                            <select class="form-control select2" name="client_id">
                                                <option value="<?= $fetch_invoice['clientID']?>" disabled selected><?=$fetch_invoice['fname'].' '. $fetch_invoice['lname'] ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        
                                        <div class="form-group col-md-6">
                                            <label class="label-title">Created Date<span class="red">*</span></label>
                                            <div class="input-group">
                                            <input type="text" class="form-control datepicker"  value="<?=$fetch_invoice['created_date'];?>" name="created_date">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="label-title">Payment Date*</label>
                                            <div class="input-group">
                                            <input type="text" class="form-control datepicker" value="<?=$fetch_invoice['payment_date'];?>" name="payment_date">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </fieldset>

                                <div class="divider">Invoice Details</div>

                                <fieldset>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label class="label-title">Amount<span class="red">*</span>:</label>
                                            <div class="input-group">
                                                <input id="amount" class="form-control" value="<?=$fetch_invoice['amount'];?>">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label class="label-title">Tax Rate:</label>
                                            <div class="input-group">
                                                <input id="tax" class="form-control" value="<?=$fetch_invoice['tax_prg'];?>" name="tax_prg">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-percent"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label class="label-title">Discount Rate:</label>
                                            <div class="input-group">
                                                <input id="discount" class="form-control" value="<?=$fetch_invoice['discount_prg'];?>" name="discount_prg">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-percent"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="label-title">Select Invoice Status<span class="red">*</span></label>
                                            <select class="form-control select2" name="picked_status" required>
                                                <option value="Unpaid"<?php if($fetch_invoice['invoice_status']=='Unpaid'){echo 'selected="selected"';}?> >Unpaid</option>
                                                <option value="Paid" <?php if($fetch_invoice['invoice_status']=='Paid'){echo 'selected="selected"';} ?> >Paid</option>
                                                <option value="Part-Paid"<?php if($fetch_invoice['invoice_status']=='Part-Paid'){echo 'selected="selected"';}?> >Part-Paid</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="calcInvoice">
                                        <div class="row">
                                            <div class="form-group col-md-6" style="margin-bottom: -1rem;">
                                                <label class="label-invoice">Tax: <label id="label-tax"><?=$fetch_invoice['tax'];?> </label> SAR</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="label-invoice">Discount: <label id="label-discount"><?=$fetch_invoice['discount'];?>  </label> SAR</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="label-invoice">Sub-Total: <label id="label-subTotal"><?=$fetch_invoice['amount'];?>  </label> SAR</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="label-invoice">Total: <label id="label-total"><?=$fetch_invoice['total'];?>  </label> SAR</label>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class="label-title">Notes</label>
                                            <textarea name="notes" cols="30" rows="3" class="form-control no-resize"><?=$fetch_invoice['note'];?></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <input type="text" name="amount" id="amount" style="opacity: 0;" />
                                <input type="text" name="tax" class="tax" style="opacity: 0;" />
                                <input type="text" name="discount" style="opacity: 0;" />
                                <input type="text" name="total" style="opacity: 0;" />

                                <div class="card-footer text-right">
                                    <button class="btn btn-danger" type="submit" name="discard">Discard</button>
                                    <button class="btn btn-info" type="submit" name="update-invoice">Update</button>
                                    <button class="btn btn-success" type="submit" name="update-&-send-invoice">Update & Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>