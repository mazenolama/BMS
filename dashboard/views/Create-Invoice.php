<?php require_once './Controllers/InvoiceController.php' ?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
        <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Create New Invoice</h4>
                  </div>
                  <div class="card-body">
                    <form  action="index.php?page=Create-Invoice" method="POST">
                      
                        <div class="divider">Invoice Information</div>
                        <fieldset>
                            <div class="form-group row">
                                <div class="form-group col-md-6">
                                    <label class="label-title">Invoice Title*</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="label-title">Select Client*</label>
                                    <select class="form-control select2" name="client_name">
                                        <?php if(count($fetch_clients) > 0): ?>
                                             <?php foreach($fetch_clients as $fetch): ?>
                                                <option value="<?= $fetch['id']?>" ><?=$fetch['fname'].' '. $fetch['lname'] ?></option>
                                            <?php endforeach?>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                
                                <div class="form-group col-md-6">
                                    <label class="label-title">Created Date*</label>
                                    <div class="input-group">
                                    <input type="text" class="form-control datepicker" required>
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
                                    <input type="text" class="form-control datepicker" required>
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
                                    <label class="label-title">Amount*</label>
                                    <div class="input-group">
                                        <input type="number" name="amount" class="form-control" required>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-dollar-sign"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label class="label-title">Tax</label>
                                    <div class="input-group">
                                        <input type="number" name="tax" class="form-control">
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
                                    <label class="label-title">Discount</label>
                                    <div class="input-group">
                                        <input type="number" name="discount" class="form-control">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-percent"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="label-title">Select Invoice Status*</label>
                                    <select class="form-control select2" name="invoice_status" required>
                                        <?php foreach($invoice_status as $status): ?>
                                            <option value="<?= $status?>" ><?=$status?></option>
                                        <?php endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div id="calcInvoice">
                                <div class="row">
                                    <div class="form-group col-md-6" style="margin-bottom: -1rem;">
                                        <label class="label-invoice">Tax: <label id="Sub-Total">100$</label></label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="label-invoice">Discount: <label id="Sub-Total">20$</label></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="label-invoice">Sub-Total: <label id="Sub-Total">50$</label></label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="label-invoice">Total: <label id="Sub-Total">100$</label></label>
                                    </div>
                                </div> 
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="label-title">Notes</label>
                                    <textarea name="notes" cols="30" rows="3" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </fieldset>
                        <div class="card-footer text-right">
                            <button class="btn btn-danger" type="submit" name="discard">Discard</button>
                            <button class="btn btn-info" type="submit" name="save">Save</button>
                            <button class="btn btn-success" type="submit" name="save-&-send">Save & Send</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>