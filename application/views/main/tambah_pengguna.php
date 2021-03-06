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
                                <h4>Form Input</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="<?=base_url('pengguna_Controller/act_addAkun');?>">
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;nama</p>
                                            <input type="text" class="form-control input-default " placeholder="Name" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;Username</p>
                                            <input type="text" class="form-control input-default " placeholder="username" name="username">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;password</p>
                                            <input type="password" class="form-control input-default " placeholder="password" name="pass">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;Jenis Kelamin</p>
                                            &nbsp;&nbsp;<input type="radio" class="input-default" name="jk" value="pria"> pria&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" class="input-default" name="jk" value="wanita"> wanita
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;Tanggal Lahir</p>
                                            <input type="date" class="form-control input-default " placeholder="Input Default" name="tgl">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;telp</p>
                                            <input type="number" class="form-control input-default " placeholder="Input Default" name="telp">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;Alamat</p>
                                            <textarea class="form-control input-default " placeholder="address" name="almt"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;Level</p>
                                            <select name="level" class="form-control input-default">
                                                <option value='1'>direktur</option>
                                                <option value='2'>pelayanan</option>
                                                <option value='3'>dokter</option>
                                                <option value='4'>kasir</option>
                                            </select>
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