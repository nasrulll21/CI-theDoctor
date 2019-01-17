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
                                <h4>Tabel Pasien </h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>no.</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>Tanggal Lahir</th>
                                                <th>No. HP</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no=0; 
                                            foreach($user as $us) : $no++?>
                                            <tr>
                                                <th scope="row"><?php echo $no ?></th>
                                                <td><?php echo $us->Nama ?></td>
                                                <td><?php echo $us->Username ?></td>
                                                <td><?php echo $us->Password ?></td>
                                                <td><?php echo $us->Jk ?></td>
                                                <td><?php echo $us->Alamat ?></td>
                                                <td><?php echo $us->tgl ?></td>
                                                <td><?php echo $us->no_hp ?></td>
                                                <td> 
                                                    <a href="<?=base_url('pengguna_Controller/edit_akun/').$us->Username?>" class='btn btn-warning btn-flat m-b-10 m-l-5'><i class='fa fa-edit'></i></a>
                                                    <a href="<?=base_url('pengguna_Controller/delete_akun/').$us->Username?>" class='btn btn-danger btn-flat m-b-10 m-l-5'><i class='fa fa-close'></i></a>
                                                </td>
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