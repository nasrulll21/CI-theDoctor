        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Pasien</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Tabel Pasien</a></li>
                        <li class="breadcrumb-item active">Data Pasien</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Tabel Pasien     </h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>no.</th>
                                                <th>Kode Pasien</th>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Kelamin</th>
                                                <th>tgl Lahir</th>
                                                <th>Agama</th>
                                                <th>Umur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no=0; 
                                            foreach($pasien as $us) : $no++?>
                                            <tr>
                                                <th scope="row"><?php echo $no ?></th>
                                                <td><?php echo $us->kd_pasien ?></td>
                                                <td><?php echo $us->nama_lengkap ?></td>
                                                <td><?php echo $us->jk ?></td>
                                                <td><?php echo $us->tgl_lahir ?></td>
                                                <td><?php echo $us->agama ?></td>
                                                <td><?php echo $us->umur ?></td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->