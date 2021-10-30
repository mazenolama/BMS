<?php require_once './Controllers/ClientController.php' ?>
<div class="main-content">
    <section class="section">
    <div class="row ">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
                <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                    <div class="card-content">
                    <h5 class="font-15">New Booking</h5>
                    <h2 class="mb-3 font-18">258</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                    <div class="banner-img">
                    <img src="assets/img/banner/1.png" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
                <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                    <div class="card-content">
                    <h5 class="font-15"> Clients</h5>
                    <h2 class="mb-3 font-18"><?= count($fetch_clients)?></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                    <div class="banner-img">
                    <img src="assets/img/banner/2.png" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
                <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                    <div class="card-content">
                    <h5 class="font-15">New Project</h5>
                    <h2 class="mb-3 font-18">128</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                    <div class="banner-img">
                    <img src="assets/img/banner/3.png" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
                <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                    <div class="card-content">
                    <h5 class="font-15">Revenue</h5>
                    <h2 class="mb-3 font-18">$48,697</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                    <div class="banner-img">
                    <img src="assets/img/banner/4.png" alt="">
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
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-header">
            <h4>Projects Payments</h4>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Client Name</th>
                    <th>Date</th>
                    <th>Payment Method</th>
                    <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td>John Doe </td>
                    <td>11-08-2018</td>
                    <td>NEFT</td>
                    <td>$258</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>Cara Stevens
                    </td>
                    <td>15-07-2018</td>
                    <td>PayPal</td>
                    <td>$125</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>
                        Airi Satou
                    </td>
                    <td>25-08-2018</td>
                    <td>RTGS</td>
                    <td>$287</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td>
                        Angelica Ramos
                    </td>
                    <td>01-05-2018</td>
                    <td>CASH</td>
                    <td>$170</td>
                    </tr>
                    <tr>
                    <td>5</td>
                    <td>
                        Ashton Cox
                    </td>
                    <td>18-04-2018</td>
                    <td>NEFT</td>
                    <td>$970</td>
                    </tr>
                    <tr>
                    <td>6</td>
                    <td>
                        John Deo
                    </td>
                    <td>22-11-2018</td>
                    <td>PayPal</td>
                    <td>$854</td>
                    </tr>
                    <tr>
                    <td>7</td>
                    <td>
                        Hasan Basri
                    </td>
                    <td>07-09-2018</td>
                    <td>Cash</td>
                    <td>$128</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</div>