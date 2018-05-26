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
				<li> <a href="kategori.php">Daftar Kategori</a></li>
				<li class="active">Edit Kategori</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Kategori</div>
		</div><!--/.row-->
		<div class="panel panel-primary">

			<div class="panel-body">
				<div class="canvas-wrapper">
					<div class="bs-docs-example">
						<table class="table">
							<tbody>
								<tr>
									<th class="col-md-3">ID Kategori</th>
									<td>&nbsp;: &nbsp;</td>
									<td><input class="form-control" value="K01" readonly></td>
								</tr>
								<tr>
									<th class="col-md-3">Nama Kategori</th>
									<td>&nbsp;: &nbsp;</td>
									<td><input class="form-control" value="Rumah"></td>
								</tr>
								<tr>
									<th>Keterangan Kategori</th>
									<td>&nbsp;: &nbsp;</td>
									<td>  <textarea class="form-control" rows="3"> Rumah Adalah blablabal </textarea> </td>
								</tr>
								<tr>
									<th> &nbsp; </th>
									<th> &nbsp; </th>
									<td> <a href="#"> <button type="button" class="btn btn-lg btn-primary col-lg-5"> <i class="fa fa-save"></i> &nbsp; Simpan Data Kategori</button></a><a href="#"> <button type="button" class="btn btn-lg btn-default col-lg-5"> <i class="fa fa-arrow-left"></i> &nbsp;Batal</button></a></td>

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