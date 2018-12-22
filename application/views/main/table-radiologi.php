        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Table Pemeriksaan</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Data Table Pemeriksaan</li>
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
                                <h4 class="card-title">Table Radiologi</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="160px">Kode Periksa</th>
                                                <th>Nama Pemeriksaan</th>
                                                <th>Harga</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Kode Periksa</th>
                                                <th>Nama Pemeriksaan</th>
                                                <th>Harga</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                            foreach ($periksa as $p) {
                                                echo "<tr> 
                                                    <td>".$p['id_periksa']."</td>
                                                    <td>".$p['nama_pemeriksaan']."</td>
                                                    <td>".$p['harga']."</td>
                                                    <td width=130px>
                                                        <a href='".base_url()."Admin/update_room/".$p['id_periksa']."' class='btn btn-warning btn-flat m-b-10 m-l-5'><i class='fa fa-edit'></i></a>
                                                        <a href='".base_url()."Admin/delete_room/".$p['id_periksa']."' class='btn btn-danger btn-flat m-b-10 m-l-5'><i class='fa fa-close'></i></a>
                                                    </td>
                                                </tr>";
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Input Data</h3>
                                    <form action="<?php echo base_url('Admin/add_periksa')?>" method="post">
                                        <div class="row p-t-15">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control input-default" placeholder="ID" name="id"/>
                                            </div>

                                            <div class="col-md-3">
                                                <input type="text" class="form-control input-default" placeholder="nama periksa" name="nm_periksa"/>
                                            </div>

                                            <div class="col-md-3">
                                                <input type="text" class="form-control input-default" placeholder="harga Rp." name="harga"/>
                                            </div>
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-info btn-flat m-b-10 m-l-50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Insert&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>
                </div>
                <!-- End PAge Content -->