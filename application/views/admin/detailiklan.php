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
				<li> <a href="daftariklan.php">Daftar Iklan </a> </li>
				</li>
				<li class="active">Detail Iklan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Detail Iklan</h1>
			</div>
		</div><!--/.row-->
		<div class="panel panel-primary">

			<div class="panel-body">
				<div class="canvas-wrapper">
					<div class="bs-docs-example">
						<table class="table">
							<tbody>
								<tr>
									<th class="col-md-3">Judul Iklan</th>
									<td>&nbsp;: &nbsp;</td>
									<td> Dijual Tanah seluas 5 hektar Murah</td>
								</tr>
								<tr>
									<th>Tanggal Iklan</th>
									<td>&nbsp;: &nbsp;</td>
									<td> 5 Agustus 2018</td>
								</tr>
								<tr>
									<th> Nama Properti</th>
									<td>&nbsp;: &nbsp;</td>
									<td> Tanah 5 hektar</td>
								</tr>
								<tr>
									<th> Harga Properti</th>
									<td>&nbsp;: &nbsp;</td>
									<td> Rp. 80.000.000,- </td>
								</tr>
								<tr>
									<th> Kabupaten, Provinsi</th>
									<td>&nbsp;: &nbsp;</td>
									<td> Magetan, Jawa Timur </td>
								</tr>
								<tr>
									<th> Alamat Properti</th>
									<td>&nbsp;: &nbsp;</td>
									<td> RT. 015 RW 006 Dukuh III Desa Setren Kec. Bendo Kabupaten Magetan</td>
								</tr>
								<tr>
									<th> Alamat Maps</th>
									<td>&nbsp;: &nbsp;</td>
									<td> <a href="http://goo.gle/ttstw"> http://goo.gle/ttstw </a></td>
								</tr>
								<tr>
									<th> Deskripsi Properti</th>
									<td>&nbsp;: &nbsp;</td>
									<td> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut ante in sapien blandit luctus sed ut lacus. Phasellus urna est, faucibus nec ultrices placerat, feugiat et ligula. Donec vestibulum magna a dui pharetra molestie. Fusce et dui urna.</td>
								</tr>
								<tr>
									<th> Fasilitas Properti</th>
									<td>&nbsp;: &nbsp;</td>
									<td> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut ante in sapien blandit luctus sed ut lacus. Phasellus urna est, faucibus nec ultrices placerat, feugiat et ligula. Donec vestibulum magna a dui pharetra molestie. Fusce et dui urna.</td>
								</tr>
								<tr>
									<th> Foto Nampak Depan</th>
									<td>&nbsp;: &nbsp;</td>
									<th> <img src="images/image.jpg" width="300px" heigth="200px" padding="10px"></th>
								</tr>
								<tr>
									<th> Foto Nampak Samping</th>
									<td>&nbsp;: &nbsp;</td>
									<th> <img src="images/image.jpg" width="300px" heigth="200px" padding="10px"></th>
								</tr>
								<tr>
									<th> Foto Nampak Belakang</th>
									<td>&nbsp;: &nbsp;</td>
									<th> <img src="images/image.jpg" width="300px" heigth="200px" padding="10px"></th>
								</tr>
								<tr>
									<th> &nbsp; </th>
									<th> &nbsp; </th>
									<td> <a href="editdataiklan.php"> <button type="button" class="btn btn-lg btn-warning col-lg-5"> <i class="fa fa-pencil"></i> &nbsp;Ubah Data Iklan</button></a><a href="#"> <button type="button" class="btn btn-lg btn-default col-lg-5"> <i class="fa fa-arrow-left"></i> &nbsp;Kembali Ke Daftar Iklan</button></a></td>

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