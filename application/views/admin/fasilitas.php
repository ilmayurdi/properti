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
				<li class="active">Daftar Fasilitas</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Fasilitas &nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><button type="button" class="btn btn-lg btn-primary"><i class="fa fa-plus"> &nbsp;&nbsp;</i>Tambah Fasilitas</button></a></h1>
			</div>
		</div><!--/.row-->
		<div class="panel panel-primary">

			<div class="panel-body">
				<div class="canvas-wrapper">
					<div class="bs-docs-example">
						<table class="table">
							<thead class="panel-heading" style="background-color: #2fdab8;color:white;">
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									<td><a href="#"><button type="button" class="btn btn-sm btn-info">Detail</button></a>&nbsp;&nbsp;<a href="#"><button type="button" class="btn btn-sm btn-warning">Edit</button></a>&nbsp;&nbsp;<a href="#"><button type="button" class="btn btn-sm btn-danger">Delete</button></a></td>
								</tr>
								<tr>
									<td>2</td>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
									<td><a href="#"><button type="button" class="btn btn-sm btn-info">Detail</button></a>&nbsp;&nbsp;<a href="#"><button type="button" class="btn btn-sm btn-warning">Edit</button></a>&nbsp;&nbsp;<a href="#"><button type="button" class="btn btn-sm btn-danger">Delete</button></a></td>
								</tr>
								<tr>
									<td>3</td>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><a href="#"><button type="button" class="btn btn-sm btn-info">Detail</button></a>&nbsp;&nbsp;<a href="#"><button type="button" class="btn btn-sm btn-warning">Edit</button></a>&nbsp;&nbsp;<a href="#"><button type="button" class="btn btn-sm btn-danger">Delete</button></a></td>
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