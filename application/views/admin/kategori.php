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
				<li class="active">Daftar Kategori</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Kategori &nbsp;&nbsp;&nbsp;&nbsp;<a href="tambahkategori.php"><button type="button" class="btn btn-lg btn-primary"><i class="fa fa-plus"> &nbsp;&nbsp;</i>Tambah Kategori</button></a></h1>
			</div>
		</div><!--/.row-->
		<div class="panel panel-primary">

			<div class="panel-body">
				<div class="canvas-wrapper">
					<div class="bs-docs-example">
						<table class="table">
							<thead class="panel-heading" style="background-color: #2fdab8;color:white;">
								<tr>
									<th>ID</th>
									<th>Nama</th>
									<th class="col-lg-6">Keterangan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Rumah</td>
									<td>rumah adalah blablabla</td>									
									<td><a href="editkategori.php"><button type="button" class="btn btn-sm btn-warning">Edit</button></a>&nbsp;&nbsp;<a href="#"><button type="button" class="btn btn-sm btn-danger">Delete</button></a></td>
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