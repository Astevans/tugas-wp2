<!DOCTYPE html>
<html lang="en">
<head>
<title>Ruang Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Holiday Spot Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="admin/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="admin/css/style.css" type="text/css" rel="stylesheet" media="all">      
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="admin/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="admin/js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts --> 
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
<!-- //web-fonts --> 
</head>
<body>
	<!-- banner -->
	<div class="banner about-banner">  
		<div class="header agileinfo-header"><!-- header -->
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="index.html">Ruang<span> Admin</span></a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left"> 
												<li><a href="dashboard_admin.php" class="btn w3ls-hover">Home</a></li>
							<li><a href="input_data_karyawan.php" class="w3ls-hover active">Input Data Karyawan</a></li>   
							<li><a href="tampil_data.php" class="btn w3ls-hover">Tampil Data Karyawan</a></li>
							<li><a href="index.php" class="btn w3ls-hover">Logout</a></li>
						</ul>	   
						<div class="clearfix"> </div>
					</div><!-- //navbar-collapse --> 
				</div><!-- //container-fluid -->
			</nav>
		</div><!-- //header -->	
		<!-- banner-text -->
		<div class="banner-text"> 
			<div class="container"> 
				<div class="banner-w3lstext">
					<h2>Form Input Data Karyawan</h2>
				</div> 	 
			</div>
		</div>
		<!-- //banner-text -->    
	</div>
	<!-- //banner --> 
	<!-- about -->
	<div class="welcome about">
		<div class="container">  
			<h3 class="agileits-title"></h3>
			<div class="about-grids"> 
			
				<div class="col-md-7 welcome-w3left">
				<div align="center">
				  <form action="prosesinput.php?aksi=submit" method="POST" enctype="multipart/form-data">
					<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td width="20" height="36">&nbsp;</td>
		<td width="165">NIK</td>
		<td><input type="text" name="nik">&nbsp;</td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Jenis Kelamin</td>
		<td><input type="radio" name="jk" value="L" checked> Laki-laki
			<input type="radio" name="jk" value="P"> Perempuan</td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Divisi</td>
		<td><select name="divisi">
				<option value="produksi">produksi
				<option value="personalia">personalia
				<option value="pemasaran">pemasaran
				<option value="pembelanjaan">pembelanjaan
			</select></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Tempat Lahir</td>
		<td><input type="text" name="tmp_lhr"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Tanggal Lahir</td>
		<td><input type="date" name="tgl_lhr"</td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Golongan Darah</td>
		<td><input type="radio" name="gol_darah" value="A" checked>A &nbsp;&nbsp;
			<input type="radio" name="gol_darah" value="AB">AB &nbsp;&nbsp;
			<input type="radio" name="gol_darah" value="B">B &nbsp;&nbsp;
			<input type="radio" name="gol_darah" value="O">O</td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Agama</td>
		<td><select name="agama">
				<option value="Islam">Islam
				<option value="Protestan">Protestan
				<option value="Katolik">Katolik
				<option value="Hindu">Hindu
				<option value="Budha">Budha
			</select></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Status Pernikahan</td>
		<td><select name="status">
				<option value="BM">Belum Menikah
				<option value="SM">Menikah
			</select></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>No. Telp</td>
		<td><input type="text" name="telp"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>E-Mail</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Foto</td>
		<td><input type="file" name="foto"> </td>
    </tr>
    <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="589" height="32">&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" class="btn btn-info" name="Submit" value="Submit">&nbsp;&nbsp;&nbsp;
			<input type="reset" class="btn btn-info" name="reset" value="Reset"></td>
		</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="589" height="32">&nbsp;</td>
	</tr>
</table>
</form>
</div>
				</div> 
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //about -->
	
	<!-- //newsletter -->
	<!-- footer start here --> 
	<div class="footer-agile">
		<div class="container">
			<div class="footer-agileinfo"> 
				<div class="col-md-5 col-sm-5 footer-wthree-grid"> 
				</div> 
				<div class="clearfix"> </div>		
			</div>
			<div class="copy-right"> 
				<p>© 2017 Website Karyawan . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank"> Awoc26.</a></p>
			</div>
		</div>
	</div> 
	<!-- //footer end here -->  
	<!-- FlexSlider --> 
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- End-slider-script --> 
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>