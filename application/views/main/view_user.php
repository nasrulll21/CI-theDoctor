


<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>DOCTOR-Check Health</title>
	
	<link rel="stylesheet" href="<?=base_url('assets/user_css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?=base_url('assets/user_css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?=base_url('assets/user_css/style.css');?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					
					<a href="index.html"><img src="<?=base_url('assets/img/logo2.png');?>" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="#home" >Home</a></li>
					        <li><a class="menu" href="#about">The Room</a></li>
					        <li><a class="menu" href="#service">About Us</a></li>
					        <li><a class="menu" href="#contact">contact us</a></li>
					        <li><a class="menu" href="/Regis/Registration.php">Register<a</li>
					        <li><a class="menu" href="/Login_v3/Login_v3/login.php">Login<a</li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
						
			            	<img src="<?=base_url('assets/img/slide-one.jpg');?>" alt="">
			                <div class="carousel-caption">
		               			<h1>Sign In</h1>
		               			<p>check your health immediately</p>
		               			<button> Register</button>
			                </div>
			            </div>
			            <div class="item">
						
			            	<img src="<?=base_url('assets/img/slide-two.jpg');?>" alt="">
			                <div class="carousel-caption">
		               			<h1>Sign In</h1>
		               			<p>check your health immediately</p>
		               			<button>Register</button>
			                </div>
			            </div>
			            <div class="item">
						
			            	<img src="<?=base_url('assets/img/slide-three.jpg');?>" alt="">
			                <div class="carousel-caption">
		               			<h1>Sign In</h1>
		               			<p>check your health immediately</p>
		               			<button>Register</button>
			                </div>
			            </div>
			            <div class="item">
						
			            	<img src="<?=base_url('assets/img/slide-four.jpg');?>" alt="">
			                <div class="carousel-caption">
		               			<h1>Sign In</h1>
		               			<p>check your health immediately</p>
		               			<button>Register</button>
			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->

	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<h2>Cheking Room</h2>
				<h4>Di rumah sakit PEDULI memiliki 4 ruang pemeriksaan yang bisa anda kunjungi, berikut penjelasan singkat mengenai setiap ruangan</h4>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<img class="img-responsive" src="<?=base_url('assets/img/ruang1.jpg');?>" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>L</h1>
							</div>
							<h3>Laboratorium</h3>
							<p>Sarana kesehatan yang melaksanakan pengukuran, penetapan dan pengujian terhadap bahan yang berasal dari manusia atau bahan bukan berasal dari manusia untuk penentuan jenis penyakit, penyebab penyakit, kondisi kesehatan atau faktor yang dapat berpengaruh pada kesehatan perorangan dan kesehatan masyarakat.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="<?=base_url('assets/img/ruangg.jpg');?>" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>R</h1>
							</div>

							<h3>Radiologi</h3>
							<p>Ilmu kedokteran untuk melihat bagian rama tubuh manusia menggunakan pancaran atau radiasi gelombang, baik gelombang elektromagnetik maupun gelombang mekanik.Pemeriksaan radiologi dijalankan untuk mengetahui kondisi bagian dalam tubuh pasien, dan untuk menentukan penyebab penyakit yang diderita oleh pasien. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="<?=base_url('assets/img/ruang31.jpg');?>" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>O</h1>
							</div>
							<h3>Operasi</h3>
							<p>suatu unit khusus di rumah sakit, tempat untuk melakukan tindakan pembedahan, baik elektif maupun emergency, yang membutuhkan keadaan suci hama (steril). Kamar bedah adalah ruang dimana dilakukan tindakan tindakan sehubungan dengan pembedahan. Ruangan ini merupakan ruangan terbatas/ ketat,</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section><!-- end of about section -->


	<!-- service section starts here -->
	<section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				<h2>our services</h2>
				<h4>Rumah sakit kita penyediakan pelayanan meliputi</h4>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="heart img-responsive" src="<?=base_url('assets/img/service1.png');?>" alt="">
							</div>
						</div>
						<h3>Heart problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
							
								<img class="brain img-responsive" src="<?=base_url('assets/img/service2.png');?>" alt="">
							</div>
						</div>
						<h3>brain problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
							
								<img class="knee img-responsive" src="<?=base_url('assets/img/service3.png');?>" alt="">
							</div>
						</div>
						<h3>knee problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
							
								<img class="bone img-responsive" src="<?=base_url('assets/img/service4.png');?>" alt="">
							</div>
						</div>
						<h3>human bones problem</h3>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of service section -->

	<!-- map section -->
	<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>contact us</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<h3>contact information</h3>
						<div class="info-detail">
							<ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li></ul>
							<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> 123 Some Street , London, UK, CP 123</li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Phone:</span> (032) 987-1235</li></ul>
							<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (123) 984-1234</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@doctor.com</li></ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->

	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>&copy;Mostafizur All right reserved</p>
				</div>
				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- script tags
	============================================================= -->

	<script src="<?=base_url('assets/user_js/jquery-2.1.1.js');?>"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?=base_url('assets/user_js/gmaps.js');?>"></script>
	<script src="<?=base_url('assets/user_js/smoothscroll.js');?>"></script>
	<script src="<?=base_url('assets/user_js/bootstrap.min.js');?>"></script>
	<script src="<?=base_url('assets/user_js/custom.js');?>"></script>
</body>
</html>