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
							<th style="background-color:#e6e6e6;color:#ffffff;">Step 3 <i style="color:#ffffff"class="fa fa-check-circle-o"></i></th> <!-- <i style="color:#e6e6e6"class="fa fa-check-circle-o"></i> -->
							<th style="color:#2fdab8;" >&nbsp;&nbsp;Step 4 &nbsp;&nbsp;</th>
							<th style="background-color:#e6e6e6;color:#ffffff;">&nbsp;&nbsp;Step 5</th>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-lg-12">
				<h1 class="page-header">Data Pasang Iklan</h1>
			</div>
			<div
		</div><!--/.row-->
		<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-8">
						<form role="form" action="tambahiklanstep5.php">
							<div class="form-group">
								<label>Judul Iklan</label>
								<input type="text" class="form-control" placeholder="Contoh : Dijual Rumah Murah dengan Fasilitas Lengkap">
							</div>
							<label>Jenis Iklan</label>
							<select class="form-control">
								<option>Iklan Jual</option>
								<option>Iklan Sewa</option>
							</select>
							<div class="form-group">
								<label> Harga </label>
								<input type="text" class="form-control" placeholder="Contoh : 300.000 per tahun">
								<!-- <label style="color:#a6a6a6">Rp. 80.000.000,-</label> -->
							</div>
							<label>Status Nego</label>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Ya
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Tidak
								</label>
							</div>
							<div class="form-group">
									<label>Keterangan Iklan</label>
									<textarea class="form-control" rows="3" placeholder="Contoh : Rumah Ini sangat bagus dan sebagainya"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Simpan dan Lanjutkan</button>
							<button type="reset" class="btn btn-default">Reset</button>	
						</form>
					</div>
				</div>
			</div>
		</div>
		
<?php
	include('footer.php');
?>