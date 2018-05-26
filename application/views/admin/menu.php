<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proper</title>
	<link href=<?php echo base_url(); ?>"/assets/a_admin/css/bootstrap.min.css" rel="stylesheet">
	<link href=<?php echo base_url(); ?>"/assets/a_admin/css/font-awesome.min.css" rel="stylesheet">
	<link href=<?php echo base_url(); ?>"/assets/a_admin/css/datepicker3.css" rel="stylesheet">
	<link href=<?php echo base_url(); ?>"/assets/a_admin/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>PROPER &nbsp; <i class="fa fa-cubes"></i></span>&nbsp;&nbsp;Admin</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="profile-sidebar">
		<div class="profile-userpic">
			<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
		</div>
		<div class="profile-usertitle">
			<div class="profile-usertitle-name">Username</div>
			<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			<div class="profile-usertitle-editprofile"><a href="#" style="color:#2fdab8;"><span class="glyphicon glyphicon-edit"></span>Edit Profil</a></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="divider"></div>
	<!-- <form role="search">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
		</div>
	</form> -->
	<ul class="nav menu">
			<li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="iklan.php"><em class="fa fa-flag">&nbsp;</em> Daftar Iklan</a></li>
			<!-- <li><a href="properti.php"><em class="fa fa-cubes">&nbsp;</em> Daftar Properti</a></li> -->
			<li><a href="user.php"><em class="fa fa-users">&nbsp;</em> Daftar User</a></li>
			<!-- <li><a href="laporan.php"><em class="fa fa-book">&nbsp;</em> Laporan Activities</a></li> -->
			<li class="parent "><a data-toggle="collapse" href="#sub-item-4">
				<em class="fa fa-navicon">&nbsp;</em> Daftar Pesan <span data-toggle="collapse" href="#pesan-1" class="icon pull-right"><em class="fa fa-caret-square-o-down"></em></span>
				</a>
				<ul class="children collapse" id="pesan-1">
					<li><a class="" href="pesancs.php">
						<span class="glyphicon glyphicon-envelope">&nbsp;</span> To Customer Service
					</a></li>
					<li><a class="" href="pesanpengiklan.php">
						<span class="glyphicon glyphicon-envelope">&nbsp;</span> Advisors - Visitors
					</a></li>
				</ul>
			</li>
			<!-- <li><a href="fasilitas.php"><em class="fa fa-cube">&nbsp;</em> Daftar Fasilitas</a></li> -->
			<li><a href="kategori.php"><em class="fa fa-home">&nbsp;</em> Daftar Kategori</a></li>
			<li><a href="login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

		</ul>
</div>
