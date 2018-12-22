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
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Form Input</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                <?php foreach ($user as $us) : ?>
                                    <form method="post" action="<?=base_url('pengguna_Controller/act_edit/').$us->username;?>">
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;nama</p>
                                            <input type="text" class="form-control input-default " value="<?php echo $us->nama_lengkap ?>" placeholder="Name" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;Username</p>
                                            <input type="text" class="form-control input-default " value="<?php echo $us->username ?>" placeholder="username" name="username">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;password</p>
                                            <input type="password" class="form-control input-default " value="<?php echo $us->pass ?>" placeholder="password" name="pass">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;Jenis Kelamin</p>
                                            &nbsp;&nbsp;
                                            <input type="radio" class="input-default" <?php if($us->jk == 'pria'){ echo ' checked '; } ?> name="jk" value="pria"> pria&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" class="input-default" <?php if($us->jk == 'wanita'){ echo ' checked '; } ?> name="jk" value="wanita"> wanita
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;Tanggal Lahir</p>
                                            <input type="date" class="form-control input-default " value="<?php echo $us->tgl_lahir ?>" placeholder="Input Default" name="tgl">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;Agama</p>
                                            <select name="agama" class="form-control input-default">
                                                <option <?php if($us->agama == 'islam'){ echo ' selected="selected"'; } ?> value="islam">Islam</option>
                                                <option <?php if($us->agama == 'kristen'){ echo ' selected="selected"'; } ?> value="kristen">Kristen</option>
                                                <option <?php if($us->agama == 'hindu'){ echo ' selected="selected"'; } ?> value="hindu">Hindu</option>
                                                <option <?php if($us->agama == 'buddha'){ echo ' selected="selected"'; } ?> value="buddha">Buddha</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;umur</p>
                                            <input type="number" class="form-control input-default " value="<?php echo $us->umur ?>" placeholder="number" name="umur">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;Nama Orangtua</p>
                                            <input type="text" class="form-control input-default " value="<?php echo $us->nama_ortu ?>" placeholder="wali" name="nama_ortu">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;Golongan Darah</p>
                                            <select name="gol" class="form-control input-default">
                                            <?php if( $us->gol_darah === 'A'){
                                                    echo "<option selected='selected' value='A'>A</option>";
                                                    echo "<option value='B'>B</option>";
                                                    echo "<option value='AB'>AB</option>";
                                                    echo "<option value='O'>O</option>";
                                                }else if( $us->gol_darah === 'B'){
                                                    echo "<option value='A'>A</option>";
                                                    echo "<option selected='selected' value='B'>B</option>";
                                                    echo "<option value='AB'>AB</option>";
                                                    echo "<option value='O'>O</option>";
                                                }else if( $us->gol_darah === 'AB'){
                                                    echo "<option value='A'>A</option>";
                                                    echo "<option value='B'>B</option>";
                                                    echo "<option selected='selected' value='AB'>AB</option>";
                                                    echo "<option value='O'>O</option>";
                                                }else if( $us->gol_darah === 'O'){
                                                    echo "<option value='A'>A</option>";
                                                    echo "<option value='B'>B</option>";
                                                    echo "<option value='AB'>AB</option>";
                                                    echo "<option selected='selected' value='O'>O</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;BPJS</p>
                                            
                                            <select name="bpjs" class="form-control input-default">
                                                <?php if( $us->bpjs === '1'){
                                                    echo "<option selected='selected' value='1'>Ya</option>";
                                                    echo "<option value='0'>Tidak</option>";
                                                }else{
                                                    echo "<option value='1'>Ya</option>";
                                                    echo "<option selected='selected' value='0'>Tidak</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;telp</p>
                                            <input type="number" class="form-control input-default " value="<?php echo $us->telepon ?>" placeholder="Input Default" name="telp">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;Alamat</p>
                                            <textarea class="form-control input-default " placeholder="address" name="almt"><?php echo $us->alamat ?> </textarea>
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <p>&nbsp;Level</p>
                                            <select name="level" class="form-control input-default">
                                                <?php foreach ($lvl as $lee) {
                                                    echo "<option ";
                                                    if($us->id_level == $lee->id_level){
                                                         echo " selected='selected'"; 
                                                    }
                                                    echo " value='".$lee->id_level."'>".$lee->level."</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <button type="submit" class="btn btn-info">&nbsp;&nbsp;&nbsp;<i class="fa fa-send-o"></i>&nbsp;send&nbsp;&nbsp;&nbsp;</button>
                                        </div>
                                    </form>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->