<?php
    $hPemeriksaan = array();
    $diagnos = array();
    $hDiagnosa = array();
    foreach($pasien as $p) {
        $id = $p->kd_pasien;
        $nama = $p->nama_lengkap;
    }
?>
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
                            <h4><div class="card-body"> Pemeriksaan - <?=$id;?> - <?=$nama;?></div></h4>
                            <br>
                            <form  action="<?=base_url('pemeriksaan_controller/regis');?>" method="post">
                            <input type="hidden" name="kd" value="<?=$id?>">
                            <div class="row">
                                <div class="col-4">
                                    <?php
                                        foreach($hasilPemeriksaan as $h) {
                                            array_push($hPemeriksaan,$h->id_gejala);
                                        }
                                        foreach($diagnosa as $dia) {
                                            array_push($diagnos,array('id_gejala' => $dia->id_gejala,
                                                                    'id_pemeriksaan' => $dia->id_pemeriksaan));
                                        }
                                        for($i = 0; $i < sizeof($diagnos); $i++) {
                                            for($j = 0; $j < sizeof($hPemeriksaan); $j++) {
                                                if (strpos(str_replace(",","",$diagnos[$i]['id_gejala']),$hPemeriksaan[$j]) !== false) {
                                                    array_push($hDiagnosa,$diagnos[$i]['id_pemeriksaan']);
                                                }
                                                break;
                                            }
                                        }
                                        foreach($listDiagnosa as $l) {
                                            for($x = 0; $x < sizeof($hDiagnosa); $x++) {
                                                if($hDiagnosa[$x] == $l->id_pemeriksaan) {
                                    ?>
                                                    <div class="form-group">
                                                        <label for="checkup">    
                                                        
                                                            <input type="checkbox" value="<?=$l->id_pemeriksaan;?>" name="regis[]">
                                                            <?=$l->nama_pemeriksaan;?> - <?=$l->nama_poli;?>
                                                        </label>
                                                    </div>
                                    <?php
                                                }
                                            }   
                                        }
                                    ?>
                                </div>
                            </div>      
                            <br>    
                            <hr>
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