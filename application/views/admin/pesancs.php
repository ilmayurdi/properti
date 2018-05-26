<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proper | PESAN</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
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
	<?php
		include('menu.php');
	?>
	<!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Inbox Customer Service</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Inbox Customer Service</h1>
			</div>
		</div><!--/.row-->
		<div class="panel panel-primary">

			<div class="panel-body">
				<div class="canvas-wrapper">
					<div class="bs-docs-example">
						<table class="table">
							<thead>
								<tr>
									<th>
										<input type="checkbox">
									</th>
									<th>Nama Lengkap</th>
									<th>Email</th>
									<th class="col-md-6">Subjek Pertanyaan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
									<tr>
										<td>
											<input type="checkbox">
										</td>
										
										<td><b>Username</b></td>
										<td>aaaaaaa@gmail.com</td>
										<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
										<td><a href="detailpesancs.php"><button type="button" class="btn btn-sm btn-info">Detail Pesan</button></a><a href="#"></td>
										
									</tr>
									<tr>
										<td>
											<input type="checkbox">
										</td>
										
										<td><b>Username</b></td>
										<td>aaaaaaa@gmail.com</td>
										<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
										<td><a href="#"><button type="button" class="btn btn-sm btn-info">Detail  Pesan</button></a><a href="#"></td>
										
									</tr>
									<tr>
										<td>
											<input type="checkbox">
										</td>
										
										<td><b>Username</b></td>
										<td>aaaaaaa@gmail.com</td>
										<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
										<td><a href="#"><button type="button" class="btn btn-sm btn-info">Detail  Pesan</button></a><a href="#"></td>
										
									</tr>
								

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>