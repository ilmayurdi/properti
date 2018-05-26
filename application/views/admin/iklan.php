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
				<li class="active">Daftar Iklan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Iklan </h1></div>
		</div><!--/.row-->
		<br>
		<div class="panel panel-default">
			<div class="panel-heading tabs">
				<ul class="nav nav-pills">
					<li class="active"><a href="#pilltab1" data-toggle="tab"><i class="fa fa-bolt"></i> &nbsp;Terbaru</a></li>
					<li ><a href="#pilltab2" data-toggle="tab"><i class="fa fa-bars"></i> &nbsp;Semua Iklan</a></li>
					<li><a href="#pilltab3" data-toggle="tab"> <i class="fa fa-check-square-o"></i> &nbsp;Telah di Approve </a></li>
					<li><a href="#pilltab4" data-toggle="tab"> <i class="fa fa-eye"></i> &nbsp;Belum di Approve</a></li>
				</ul>
			</div>
			<div class="panel-body tab-content">
				<div class="tab-pane fade in active" id="pilltab1">
					<h4><b>Terbaru</b></h4>
					<div class="canvas-wrapper">
						<div class="bs-docs-example">
							<table class="table">
								<thead class="panel-heading" style="background-color: #2fdab8;color:white;">
									<tr>
										<th>No</th>
										<th>Judul Iklan</th>
										<th>Harga</th>
										<th>Nama Properti</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Dijual Tanah 5 hektar Murah</td>
										<td>Rp. 80.000</td>
										<td>Tanah 5 hektar</td>
										<td><a href="detailiklan.php"><button type="button" class="btn btn-sm btn-info">Detail</button></a>&nbsp;&nbsp;</td>
										
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pilltab2">
					<h4><b>Semua</b></h4>
					<div class="canvas-wrapper">
						<div class="bs-docs-example">
							<table class="table">
								<thead class="panel-heading" style="background-color: #2fdab8;color:white;">
									<tr>
										<th>No</th>
										<th>Judul Iklan</th>
										<th>Harga</th>
										<th>Nama Properti</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Dijual Tanah 5 hektar Murah</td>
										<td>Rp. 80.000</td>
										<td>Tanah 5 hektar</td>
										<td><a href="detailiklan.php"><button type="button" class="btn btn-sm btn-info"> Detail</button></a>&nbsp;&nbsp; </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pilltab3">
					<h4><b>Di Approve</b></h4>
					<div class="canvas-wrapper">
						<div class="bs-docs-example">
							<table class="table">
								<thead class="panel-heading" style="background-color: #2fdab8;color:white;">
									<tr>
										<th>No</th>
										<th>Judul Iklan</th>
										<th>Harga</th>
										<th>Nama Properti</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Dijual Tanah 5 hektar Murah</td>
										<td>Rp. 80.000</td>
										<td>Tanah 5 hektar</td>
										<td><a href="detailiklan.php"><button type="button" class="btn btn-sm btn-info">Detail</button></a>&nbsp;&nbsp; </td>	
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pilltab4">
					<h4><b>Belum di Approve</b></h4>
					<div class="canvas-wrapper">
						<div class="bs-docs-example">
							<table class="table">
								<thead class="panel-heading" style="background-color: #2fdab8;color:white;">
									<tr>
										<th>No</th>
										<th>Judul Iklan</th>
										<th>Harga</th>
										<th>Nama Properti</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Dijual Tanah 5 hektar Murah</td>
										<td>Rp. 80.000</td>
										<td>Tanah 5 hektar</td>
										<td><a href="detailiklan.php"><button type="button" class="btn btn-sm btn-info">Detail</button></a>&nbsp;&nbsp; </td>
										
									</tr>
									

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
	include('footer.php');
?>