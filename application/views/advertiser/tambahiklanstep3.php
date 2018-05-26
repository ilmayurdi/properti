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
							<th style="background-color:#e6e6e6;color:#ffffff;">Step 2 <i style="color:#ffffff"class="fa fa-check-circle-o"></i></th> <!-- <i style="color:#e6e6e6"class="fa fa-check-circle-o"></i> -->
							<th style="color:#2fdab8;" >&nbsp;&nbsp;Step 3 &nbsp;&nbsp;</th>
							<th style="background-color:#e6e6e6;color:#ffffff;">&nbsp;&nbsp;Step 4</th>
							<th style="background-color:#e6e6e6;color:#ffffff;">&nbsp;&nbsp;Step 5</th>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-lg-12">
				<h1 class="page-header">Isi Lokasi Properti</h1>
			</div>
			<div
		</div><!--/.row-->
		<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-6">
						<form role="form" action="tambahiklanstep4.php">
							<div class="form-group">
								<label>Provinsi</label>
								<select class="form-control">
									<option>Jawa Timur</option>
									<option>Jawa Tengah</option>
									<option>Jawa Barat</option>
									<option>DKI Jakarta</option>
								</select>
							</div>
							<div class="form-group">
								<label>Kabupaten </label>
								<select class="form-control">
									<option>Magetan</option>
									<option>Madiun</option>
									<option>Sleman</option>
									<option>Bantul</option>
								</select>
							</div>
							<div class="form-group">
									<label>Alamat Lengkap</label>
									<textarea class="form-control" rows="3" placeholder="No. Rumah, RT RW, Ancer-ancer, Depan Belakang, Gang, Desa, Kecapatan "></textarea>
							</div>
							<div class="form-group">
									<label>Alamat Googe Maps</label>
									<textarea class="form-control" rows="3" placeholder="Isi Dengan Alamat Google Maps"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								
								<label>INI GOOGLE MAPS AREA</label>
								<br />
								<br/>
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