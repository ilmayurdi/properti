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
				<li class="active">Tambah Iklan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<table class="table">
					<tbody>
						<tr>
							<th style="background-color:#e6e6e6;color:#ffffff;">&nbsp;</th>
							<th style="background-color:#e6e6e6;color:#ffffff;">Step 1 <i style="color:#ffffff"class="fa fa-check-circle-o"></i></th> <!-- <i style="color:#e6e6e6"class="fa fa-check-circle-o"></i> -->
							<th style="color:#2fdab8;" >&nbsp;&nbsp;Step 2 &nbsp;&nbsp;</th>
							<th style="background-color:#e6e6e6;color:#ffffff;">&nbsp;&nbsp;Step 3</th>
							<th style="background-color:#e6e6e6;color:#ffffff;">&nbsp;&nbsp;Step 4</th>
							<th style="background-color:#e6e6e6;color:#ffffff;">Step 5</th>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-lg-12">
				<h1 class="page-header">Isi Data Properti</h1>
			</div>
			<div
		</div><!--/.row-->
		<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-6">
						<form role="form" action="tambahiklanstep3.php">
							<div class="form-group">
								<label>Nama Properti</label>
								<input type="text" class="form-control" placeholder="Contoh : Rumah Grand Prima">
							</div>
							<div class="form-group">
								<label>Harga </label>
								<input type="number" class="form-control" placeholder="Contoh : 80000000">
								<label style="color:#a6a6a6">Rp. 80.000.000,-</label>
							</div>
							<div class="form-group">
									<label>Deskripsi Properti</label>
									<textarea class="form-control" rows="3" placeholder="Contoh : Luas Bangunan, Luas Tanah, Jumlah Kamar dan lain Sebagainya "></textarea>
							</div>
							<div class="form-group">
									<label>Fasilitas - fasilitas Properti</label>
									<textarea class="form-control" rows="3" placeholder="Contoh : Kamar Mandi Dalam, Kamar Mandi Luar, Lemari Pakaian, Dapur dan Lain-lain "></textarea>
								</div>
							</div>
							<div class="col-md-6">
								
								<div class="form-group">
									<label>Unggah Foto Tampak Depan</label>
									<input type="file">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>Unggah Foto Tampak Samping</label>
									<input type="file">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="form-group">
									<label>Unggah Foto Tampak Belakang</label>
									<input type="file">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<button type="submit" class="btn btn-primary">Simpan dan Lanjutkan</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
<?php
	include('footer.php');
?>