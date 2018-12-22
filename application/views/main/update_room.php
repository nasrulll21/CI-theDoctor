<!-- Page wrapper  -->
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit Data Ruangan</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <?php foreach($Data as $d) : ?>          
                                        <form class="form-valide" action="<?php echo base_url('Admin/action_update/').$d->id_periksa ?>" method="post">
                                            <h3 class="card-title m-t-15">Detail Data</h3> <br>
                                            <div class="form-group row">
                                                <div class="col-lg-1"></div>
                                                <label class="col-lg-4 col-form-label" for="val-username">Nama Pemeriksaan <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" value="<?php echo $d->nama_pemeriksaan ?>" class="form-control" id="val-username" name="nm_periksa" placeholder="nama pemeriksaan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-1"></div>
                                                <label class="col-lg-4 col-form-label" for="val-email">Harga <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" value="<?php echo $d->harga ?>" id="val-number" name="harga" placeholder="price" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                            <div class="col-lg-7 ml-auto">
                                            <br><br><button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                    <?php endforeach ?>
                                        </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->