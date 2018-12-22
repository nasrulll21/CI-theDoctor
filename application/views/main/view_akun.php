<!-- Page wrapper  -->
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Detail Data Pengguna</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Detail Data</li>
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
                                        <form class="form-valide" action="<?php echo base_url('Admin/');?>" method="post">
                                            <h3 class="card-title m-t-15">Detail Data</h3> <br>
                                            <?php foreach($user as $us) :?>
                                            <div class="form-group row">
                                                <div class="col-lg-1"></div>
                                                <label class="col-lg-4 col-form-label" for="val-username">Nama<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" readonly  value="<?php echo $us->nama_lengkap  ?>" class="form-control" id="val-username" name="nm_periksa" placeholder="nama pemeriksaan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-1"></div>
                                                <label class="col-lg-4 col-form-label" for="val-username">username<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" readonly value="<?php echo $us->username  ?>" class="form-control" id="val-username" name="nm_periksa" placeholder="nama pemeriksaan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-1"></div>
                                                <label class="col-lg-4 col-form-label" for="val-username">password<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" readonly value="<?php echo $us->pass  ?>" class="form-control" id="val-username" name="nm_periksa" placeholder="nama pemeriksaan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-1"></div>
                                                <label class="col-lg-4 col-form-label" for="val-username">Jenis Kelamin<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" readonly value="<?php echo $us->jk  ?>" class="form-control" id="val-username" name="nm_periksa" placeholder="nama pemeriksaan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-1"></div>
                                                <label class="col-lg-4 col-form-label" for="val-username">tanggal Lahir<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" readonly value="<?php echo $us->tgl_lahir  ?>" class="form-control" id="val-username" name="nm_periksa" placeholder="nama pemeriksaan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-1"></div>
                                                <label class="col-lg-4 col-form-label" for="val-username">agama<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" readonly value="<?php echo $us->agama  ?>" class="form-control" id="val-username" name="nm_periksa" placeholder="nama pemeriksaan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-1"></div>
                                                <label class="col-lg-4 col-form-label" for="val-username">umur<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" readonly value="<?php echo $us->umur  ?>" class="form-control" id="val-username" name="nm_periksa" placeholder="nama pemeriksaan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-1"></div>
                                                <label class="col-lg-4 col-form-label" for="val-username">Nama Orang Tua<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" readonly value="<?php echo $us->nama_ortu  ?>" class="form-control" id="val-username" name="nm_periksa" placeholder="nama pemeriksaan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-1"></div>
                                                <label class="col-lg-4 col-form-label" for="val-username">golongan darah<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" readonly value="<?php echo $us->gol_darah  ?>" class="form-control" id="val-username" name="nm_periksa" placeholder="nama pemeriksaan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-1"></div>
                                                <label class="col-lg-4 col-form-label" for="val-username">bpjs <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" readonly value="<?php echo $us->bpjs  ?>" class="form-control" id="val-username" name="nm_periksa" placeholder="nama pemeriksaan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-1"></div>
                                                <label class="col-lg-4 col-form-label" for="val-username">Telp.<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" readonly value="<?php echo $us->telepon  ?>" class="form-control" id="val-username" name="nm_periksa" placeholder="nama pemeriksaan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-1"></div>
                                                <label class="col-lg-4 col-form-label" for="val-username">alamat<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <textarea type="text" readonly class="form-control" id="val-username" name="nm_periksa" placeholder="nama pemeriksaan" required><?php echo $us->alamat;?></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                        <?php endforeach ?>
                                        </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->