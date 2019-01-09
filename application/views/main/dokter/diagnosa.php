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
                            <div class="row">
                                <div class="col-5">
                                    <input type="text" class="form-control input-default " placeholder="Kode Pasien">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-info"><span class="fa fa-search"></span></button>
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
                                        | <input type="radio" class="input-default" name="gejala<?=$i?>" value="<?php echo $gjl->id_gejala?>"> Ya
                                    </div>
                                    <div class="col-2">
                                        <input type="radio" class="input-default" name="gejala<?=$i?>"> Tidak
                                    </div>
                                </div> <br>
                            <?php $i++; endforeach    ?>
                            <br>
                            <div>
                                <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Cek</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->