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
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <h4><div class="card-body"> Pemeriksaan</div></h4>
                            <br>
                            <form  action="<?=base_url('pemeriksaan_controller/add');?>" method="post">
                            <div class="row">
                                <div class="col-4">
                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1"required name="kd">
                                    <option>-- pilih pasien --</option>
                                    <?php foreach($pasien as $psn) :?>
                                        <option value="<?=$psn->kd_pasien?>"><?php echo $psn->kd_pasien." - ".$psn->nama_lengkap ?></option>
                                    <?php endforeach ?>
                                    </select>
                                </div>
                            </div>      
                            <br>    
                            <hr>
                            <div class="col-12">
                                <h5>Keluhan : </h5>
                            </div>
                            <br>
                            <?php $i=0; foreach($gejala as $gjl) : ?>
                                <div class="row">
                                    <div class="col-2"><?php echo $gjl->gejala ?></div>
                                    <div class="col-1">
                                    <input type="hidden" name="gejala<?=$i?>" value="<?php echo $gjl->id_gejala?>">
                                        <input type="radio" class="input-default" name="sts<?=$i?>" value="1"> Ya
                                    </div>
                                    <div class="col-2">
                                        <input type="radio" class="input-default" name="sts<?=$i?>" value="0"> Tidak
                                    </div>
                                </div> <br>
                            <?php $i++; endforeach  ?>
                            <br>
                            <div>
                                <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Cek</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->