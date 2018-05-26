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
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-flag color-blue"></em>
							<div class="large">000</div>
							<div class="text-muted">Advertisements</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-orange"></em>
							<div class="large">52</div>
							<div class="text-muted">Visitors</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">24</div>
							<div class="text-muted">Advertisers</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						Iklan Baru Hari Ini
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<div class="bs-docs-example">
								<table class="table">
									<thead class="panel-heading">
										<tr>
											<th>No</th>
											<th>Judul Iklan</th>
											<th>Harga</th>
											<th>Nama Properti</th>
											<th>Waktu</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Dijual Tanah 5 hektar Murah</td>
											<td>Rp. 80.000</td>
											<td>Tanah 5 hektar</td>
											<td>10-10-18 19:08</td>
											<td><a href="detailiklan.php"><button type="button" class="btn btn-sm btn-info">Detail</button></a>&nbsp;&nbsp;<a href="editdataiklan.php"><button type="button" class="btn btn-sm btn-warning">Edit</button></a>&nbsp;&nbsp;<a href="#"><button type="button" class="btn btn-sm btn-danger">Delete</button></a></td>
											
										</tr>
										

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
<?php
	include('footer.php');
?>