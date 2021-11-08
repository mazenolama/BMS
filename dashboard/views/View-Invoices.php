<?php require_once './Controllers/InvoiceController.php' ?>
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Invoices List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="invoices-table" style="width:100%;">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Invoice Title</th>
                                    <th>Client Name</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Payment Date</th>
                                    <th>Created Date</th>
                                    <th>Last Update</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>