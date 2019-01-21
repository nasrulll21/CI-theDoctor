<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/Admin/images/miniLogo.png');?>">
    <title>DOCTOR-Check Health</title>
    <!-- Bootstrap Core CSS -->
    
    <link href="<?=base_url('assets/Admin/css/lib/bootstrap/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    
    <link href="<?=base_url('assets/Admin/css/helper.css');?>" rel="stylesheet">
    
    <link href="<?=base_url('assets/Admin/css/style.css');?>" rel="stylesheet">
    
    <link href="<?=base_url('assets/doctor/css/style.css');?>" rel="stylesheet">


    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                
                    <a class="navbar-brand" href="../index.php">
                        <!-- Logo icon -->
                        <b><img src="<?=base_url('assets/img/logo_kecil1.png');?>" alt="homepage" class="dark-logo" /></b>
                    </a>
                </div>
                <!-- End Logo -->
            </nav>
        </div>
        <!-- End header header -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">REGISTRASI</h4>
                            </div>
                            <div class="card-body">
                                <form  action="<?=base_url('pengguna_Controller/act_addPasien');?>" method="post">
                                    <div class="form-body">
                                        <h3 class="card-title m-t-15">Biodata</h3>
                                        <div data-flashdata="<?= $this->session->flashdata('flash')?>"></div>
                                        <hr>
                                        <div class="row-p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Kode Pasien</label>
                                                    <input type="text" id="nama" class="form-control" readonly name="idd" value="<?='PSN-'.random_string('alnum', 8)?>"></div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Lengkap</label>
                                                    <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap" name="nama" required></div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                        <label class="control-label">Jenis Kelamin</label>
                                                        <select class="form-control custom-select" required name="jk">
                                                            <option value="pria">Pria</option>
                                                            <option value="wanita">Wanita</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" required name="tgl">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Agama</label>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1"required name="agama">
                                                        <option value="islam">Islam</option>
                                                        <option value="kristen">Kristen</option>
                                                        <option value="hindu">Hindu</option>
                                                        <option value="buddha">Buddha</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Umur</label>
                                                    <input type="number" id="umur" class="form-control form-control-danger" placeholder="umur" name="umur"></div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Orang Tua/Wali</label>
                                                    <input type="text" id="username" class="form-control form-control-danger" placeholder="Orang Tua" name="nama_ortu"></div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Golongan Darah</label>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1"required name="gol">
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="AB">AB</option>
                                                        <option value="O">O</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">BPJS</label>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1"required name="bpjs">
                                                        <option value="1">YA</option>
                                                        <option value="0">TIDAK</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">No. KTP</label>
                                                    <input type="number" id="username" class="form-control form-control-danger" placeholder="KTP" name="ktp">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Telepon</label>
                                                        <input type="number" id="tlp" class="form-control form-control-danger" placeholder="Telepon" name="telp">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label class="control-label">POLI</label>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1"required name="id_poli">
                                                        <option value="1">Poli Umum</option>
                                                        <option value="2">Poli Penyakit Dalam</option>
                                                        <option value="3">Poli THT</option>
                                                        <option value="4">Poli Saraf</option>
                                                        <option value="5">Poli Bedah</option>
                                                        <option value="6">Poli Kebidanan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <h3 class="box-title m-t-40">Address</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea class="form-control" name="almt" required placeholder="Alamat"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!--/row-->
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 Dokter <a href="https://colorlib.com"> Register</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    
    <script src="<?=base_url('assets/Admin/js/lib/jquery/jquery.min.js');?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
   
    <script src= "<?=base_url('assets/Admin/js/lib/bootstrap/js/popper.min.js');?>"></script>
    
    <script src="<?=base_url('assets/Admin/js/lib/bootstrap/js/bootstrap.min.js');?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    
    <script src="<?=base_url('assets/Admin/js/jquery.slimscroll.js');?>"></script>
    <!--Menu sidebar -->
    
    <script src="<?=base_url('assets/Admin/js/sidebarmenu.js');?>"></script>
    <!--stickey kit -->
    
    <script src="<?=base_url('assets/Admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js');?>"></script>
    <!--Custom JavaScript -->
    
    <script src="<?=base_url('assets/Admin/js/custom.min.js');?>"></script>

</body>

</html>