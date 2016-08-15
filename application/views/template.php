<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/trt-ikon/trt-ikon.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/datepicker/css/datepicker.css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">

  </head>

  <body id="top" class="tooltips">
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
			<div class="logo-center-mobile">
			<a href="#" class="nav-logo"><img src="<?php echo base_url(); ?>assets/img/blank.png"></a>
			</div>
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="divider-vertical"></li>
				<li class="nav-logo-monitor"><a href="<?php echo base_url(); ?>" class="nav-logo"><img src="<?php echo base_url(); ?>assets/img/blank.png"></a></li>
              <li class="divider-vertical"></li>			  
                <li>
                  <a href="<?php echo base_url(); ?>"><strong>Sistem Informasi Keanggotaan Himpunan Pelajar Mahasiswa Wapulaka Cabang Yogyakarta</strong></a>
                </li>			  
            </ul>
			
			<ul class="nav pull-right">
			<li class="divider-vertical"></li>
			<li id="fat-menu" class="dropdown">
			  <a href="#" id="akun" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="trt_user_suit"></i> Hello, Administrator <b class="caret"></b></a>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="akun">
				<li><a tabindex="-1" href="#"><i class="trt_user_suit"></i> My Profile</a></li>
				<li><a tabindex="-1" href="#"><i class="trt_key"></i> Change Password</a></li>
				<li><a tabindex="-1" href="#"><i class="trt_help"></i> Help</a></li>
				<li class="divider"></li>
				<li><a tabindex="-1" href="login.html"><i class="trt_door_out"></i> Logout</a></li>
			  </ul>
			</li>
			<li class="divider-vertical"></li>
			</ul>
          </div>
        </div>
      </div>
    </div>
	
	
	<div class="container-fluid inner-content">
		<div class="row-fluid">
			<div class="span2">
				<ul class="nav nav-list sidebar-list">
					<li><a href="<?php echo base_url(); ?>"><i class="icon-chevron-right"></i> <i class="trt_house"></i> Dashboard</a></li>
					<li><a href="<?php echo base_url('index.php/anggota/get_all'); ?>"><i class="icon-chevron-right"></i> <i class="trt_text_columns"></i> Anggota</a></li>
				</ul>			
			</div>
						
			<div class="span10">
				<div class="page-header">
					<h4><?php echo $judul; ?></h4><hr><hr><hr><hr>
				</div>
				
				<div class="alert alert-warning text-center">
				<a class="close" data-dismiss="alert" href="#">&times;</a>
				  <strong>Selamat Datang Di Sistem Informasi Anggota Himpunan Pelajar Mahasiswa Wapulaka Cabang Yogyakarta</strong>
				</div>

				<div class="row-fluid">
					<?php $this->load->view($content); ?>
				</div>	

			</div>
		</div>
		
	<footer class="footer">
        <p class="pull-right"><a class="scroll" data-speed="500" href="#top">Top</a></p>
		<p>Copyright &copy; 2013 <a href="#">Villa Adem Admin Template</a></p>
        <p>Built with <a href="http://getbootstrap.com/2.3.2/">Twitter Bootstrap 2.3.2</a>, and all the love from <a href="http://en.wikipedia.org/wiki/Yogyakarta">Jogja</a> by <a href="http://ariecupu.com">Ariecupu</a>. Baca <a href="http://opensource.org/licenses/MIT">Lisensi</a></p>
    </footer>
	
	</div>
	
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/highchart/highcharts.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/highchart/exporting.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/highchart/contoh-line.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/highchart/contoh-area.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/highchart/contoh-bar.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/highchart/contoh-pie.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/highchart/contoh-combo.js"></script>
	
	
	<!--NicEdit WYSWYG-->
	<script src="<?php echo base_url(); ?>assets/js/nicEdit/nicEdit.js" type="text/javascript"></script>
	<script type="text/javascript">
		bkLib.onDomLoaded(function() { 
			new nicEditor({fullPanel : true}).panelInstance('niceEdit');
		});
	</script>
	
	<!--Datepicker-->
	<script src="<?php echo base_url(); ?>assets/js/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/smooth-scroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>