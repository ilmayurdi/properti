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
				<li class="active">Daftar User</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar User</h1>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active col-md-6" ><a href="#tab1" data-toggle="tab"><b>Daftar Pengiklan</b></a></li>
							<li class="col-md-6"><a href="#tab2" data-toggle="tab"><b>Daftar Pengunjung</b></a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
								<h4>Daftar Pengiklan</h4>
								<div class="panel panel-primary">
									<div class="panel-body">
										<div class="canvas-wrapper">
											<div class="bs-docs-example">
												<table class="table">
													<thead class="panel-heading" style="background-color: #2fdab8;color:white;">
														<tr>
															<th>No</th>
															<th>Email</th>
															<th>Nama</th>
															<th>No. HP</th>
															<th>Gender</th>
															<th>Status</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>ilmayurdi354@gmail.com</td>
															<td>Ilma Yurdi</td>
															<td>085784747178</td>
															<td>Perempuan</td>
															<td>
																<select class="form-control">
																	<option> Processing </option>
																	<option>Approve</option>
																	<option>Un Approve</option>
																</select>
															</td>
															<td><center><a href="detailuser_pengiklan.php"><button type="button" class="btn btn-sm btn-info">Detail</button></a></center></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="tab-pane fade" id="tab2">
								<h4>Daftar Pengunjung</h4>
								<div class="panel panel-primary">
									<div class="panel-body">
										<div class="canvas-wrapper">
											<div class="bs-docs-example">
												<table class="table">
													<thead class="panel-heading" style="background-color: #2fdab8;color:white;">
														<tr>
															<th>No</th>
															<th>Email</th>
															<th>Nama</th>
															<th>No. HP</th>
															<th>Gender</th>
															<th>Status</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>ilmayurdi354@gmail.com</td>
															<td>Ilma Yurdi</td>
															<td>085784747178</td>
															<td>Perempuan</td>
															<td>
																<select class="form-control">
																	<option> Processing </option>
																	<option>Approve</option>
																	<option>Un Approve</option>
																</select>
															</td>
															<td><center><a href="detailuser_pengunjung.php"><button type="button" class="btn btn-sm btn-info">Detail</button></a></center></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div><!--/.panel-->
			</div>
			
<?php
	include('footer.php');
?>