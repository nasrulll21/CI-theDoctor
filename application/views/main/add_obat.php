<!-- Page wrapper  -->
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Form Input Data</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="<?=base_url('obat_controller/act_add/');?>">
                                    <div class="form-group">
                                            <br>
                                            <p>&nbsp;ID obat</p>
                                            <input type="text" class="form-control input-default " placeholder="Name" name="id">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;nama obat</p>
                                            <input type="text" class="form-control input-default " placeholder="Name" name="nmobt">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;jenis</p>
                                            <input type="text" class="form-control input-default " placeholder="username" name="jenis">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;harga</p>
                                            <input type="number" class="form-control input-default " placeholder="number" name="hrg">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;stock</p>
                                            <input type="number" class="form-control input-default " placeholder="Input Default" name="stk">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <button type="submit" class="btn btn-info">&nbsp;&nbsp;&nbsp;<i class="fa fa-send-o"></i>&nbsp;send&nbsp;&nbsp;&nbsp;</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->