        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Pegawai</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Tabel Pegawai</a></li>
                        <li class="breadcrumb-item active">Data Pegawai</li>
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
                                <h4>Tabel Pegawai     </h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>no.</th>
                                                <th>ID</th>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Kelamin</th>
                                                <th>tgl Lahir</th>
                                                <th>No HP</th>
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
                                                <td><?php echo $us->no_hp ?></td>
                                                <td>
                                                    <?php switch($us->level){
                                                        case '0':
                                                            echo "Admin";
                                                            break;
                                                        case '1':
                                                            echo "Direktur";
                                                            break;
                                                        case '2':
                                                            echo "Pegawai";
                                                            break;
                                                        case '3':
                                                            echo "Dokter";
                                                            break;
                                                    }?>
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