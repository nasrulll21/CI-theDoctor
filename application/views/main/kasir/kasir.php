 <!-- Page wrapper  -->
 <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Pembayaran</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Pembayaran</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div id="invoice" class="effect2">
                            <!--End InvoiceTop-->



                            <div id="invoice-mid">

                                <div class="invoice-info">
                                    <h2>Nama Pasien</h2>
                                        <select name="nama"  id="dataPasien" class="form-control">
                                            <?php foreach($data as $dt) : ?>
                                            <option value="<?=$dt->kd_pasien?>"><?php echo $dt->kd_pasien." - ".$dt->nama_lengkap?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <br>
                                </div>

                                <div id="project">
                                    <h2>Nama Pegawai</h2>
                                </div>

                            </div>
                            <!--End Invoice Mid-->

                            <div id="invoice-bot">

                                <div id="invoice-table">
                                    <div class="table-responsive" id="dataTransaksi">
                                    </div>
                                </div>
                                <!--End Table-->
                            </div>
                            <!--End InvoiceBot-->
                        </div>
                        <!--End Invoice-->
                    </div>
                </div>
                <!-- End PAge Content -->