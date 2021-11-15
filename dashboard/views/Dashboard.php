<?php require_once './Controllers/ClientController.php' ?>
<?php require_once './Controllers/ProfitController.php' ?>
<div class="main-content">
    <section class="section">
        <div class="row ">

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card" style="border-left:3px solid #6777ef !important ;">
                    <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                            <h3 class="font-15"> Active Clients</h3>
                            <h2 class="mb-3 font-18"><?= count($fetch_clients)?></h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                            <div class="banner-img">
                            <img src="assets/img/dashboard/clients.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card" style="border-left:3px solid #6777ef !important ;">
                    <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                            <h5 class="font-15"> Paid Invoices</h5>
                            <h2 class="mb-3 font-18"><?= $status_array['paid_count'];?></h2>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                            <div class="banner-img">
                            <img src="assets/img/dashboard/paid.png"  alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card" style="border-left:3px solid #6777ef !important ;">
                    <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                            <div class="card-content">
                            <h5 class="font-15">Unpaid Invoices</h5>
                            <h2 class="mb-3 font-18"><?= $status_array['unpaid_count'];?></h2>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6 pl-0">
                            <div class="banner-img">
                                <img src="assets/img/dashboard/unpaid.png" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card" style="border-left:3px solid #6777ef !important ;">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                                <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                    <h5 class="font-15">Revenue</h5>
                                    <h2 class="mb-3 font-15" s><?= $revenue['revenue'];?> SAR</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                    <img src="assets/img/dashboard/revenue.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Client List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="clients-table" style="width:100%;">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Client Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Company Name</th>
                                    <th>Since</th>
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