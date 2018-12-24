<!-- Page wrapper  -->
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Obat</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table Master</a></li>
                        <li class="breadcrumb-item active">Data Obat</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">                    
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Obat</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID obat</th>
                                                <th>Nama Obat</th>
                                                <th>Satuan</th>
                                                <th>harga</th>
                                                <th>stock</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($obt as $obat) : ?>
                                            <tr>
                                                <td><?php echo $obat->id_obat ?></td>
                                                <td><?php echo $obat->nama_obat ?></td>
                                                <td><?php echo $obat->satuan ?></td>
                                                <td><?php echo $obat->harga ?></td>
                                                <td><?php echo $obat->stock ?></td>
                                                <td>
                                                    <a href="<?=base_url('obat_controller/edit/');echo $obat->id_obat?>" class="btn btn-warning btn-flat m-b-10 m-l-5"><i class='fa fa-edit'></i></a>
                                                    <a href="<?=base_url('obat_controller/delete/');echo $obat->id_obat?>" class="btn btn-danger btn-flat m-b-10 m-l-5"><i class='fa fa-close'></i></a>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->