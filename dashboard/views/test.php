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
                    <form id="wizard_with_validation" action="index.php?page=Create-Invoice" method="POST">
                      
                        <h3>Client Information</h3>
                        <fieldset>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Invoice Title*</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Select Client*</label>
                                    <select class="form-control select2" name="client_name">
                                        <?php if(count($fetch_clients) > 0): ?>
                                             <?php foreach($fetch_clients as $fetch): ?>
                                                <option value="<?= $fetch['id']?>" ><?=$fetch['fname'].' '. $fetch['lname'] ?></option>
                                            <?php endforeach?>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                            <!--                   
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label class="form-label">Email (Optional)</label>
                                        <input type="text" class="form-control" name="email" >
                                    </div>
                                </div>
                            -->
                        </fieldset>

                        <h3>Invoice Details</h3>

                        <fieldset>
                            <div class="form-group row">
                                <div class="form-group col-md-6">
                                    <label class="form-label">Amount*</label>
                                    <input type="number" name="amount" class="form-control" required>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label class="form-label">Commission</label>
                                    <input type="number" name="commission" class="form-control">
                                    <div class="help-info">Please Enter The Number Of (Percentage %) </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="form-group col-md-6">
                                    <label class="form-label">Tax</label>
                                    <input type="number" name="tax" class="form-control">
                                    <div class="help-info">Please Enter The Number Of (Percentage %) </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label">Discount</label>
                                    <input type="number" name="discount" class="form-control">
                                    <div class="help-info">Please Enter The Number Of (Percentage %) </div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Notes</label>
                                    <textarea name="notes" cols="30" rows="3" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </fieldset>

                        <h3>Terms &amp; Conditions - Finish</h3>

                        <fieldset>
                            <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                            <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                        </fieldset>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>