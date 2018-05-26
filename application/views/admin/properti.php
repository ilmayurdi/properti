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
				<li class="active">Daftar Properti</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Properti</h1>
			</div>
		</div><!--/.row-->
		<div class="panel panel-primary">

			<div class="panel-body">
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
		</div>
		
		
		
		
<?php
	include('footer.php');
?>