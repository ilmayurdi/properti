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
				<li class="active">Pesan dengan Visitor</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Pesan dengan Visitor</h1>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="tab-pane fade in active" id="tab1">
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
															<th>Time</th>
															<th>Visitor</th>
															<th class="col-md-5">Ringkasan Pesan</th>

															<th>Action</th>
														</tr>
													</thead>
													<tbody>

															<tr>
																<td>
																	<input type="checkbox">
																</td>
																<th>01:06</th>
																<td><b><i>Username</i></b></td>
																<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
																<td><a href="lihatpesanvisitor.php"><button type="button" class="btn btn-sm btn-info">Lihat Pesan</button></a></td>
															</tr>
															<tr>
																<td>
																	<input type="checkbox">
																</td>
																<th>01:06</th>
																<td><b><i>Username</i></b></td>
																<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
																<td><a href="#"><button type="button" class="btn btn-sm btn-info">Lihat Pesan</button></a></td>
															</tr>
															<tr>
																<td>
																	<input type="checkbox">
																</td>
																<th>01:06</th>
																<td><b><i>Username</i></b></td>
																<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
																<td><a href="#"><button type="button" class="btn btn-sm btn-info">Lihat Pesan</button></a></td>																
															</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
					</div>
				</div><!--/.panel-->
			</div>
		</div><!--/.row-->
		
<?php
	include('footer.php');
?>