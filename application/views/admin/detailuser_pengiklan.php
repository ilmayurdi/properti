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
				<li> <a href="user.php">Daftar User</a> </li>
				</li>
				<li class="active">Detail User Pengiklan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Detail User Pengiklan</h1>
			</div>
		</div><!--/.row-->
		<div class="panel panel-primary">

			<div class="panel-body">
				<div class="canvas-wrapper">
					<div class="bs-docs-example">
						<table class="table">
							<tbody>
								<tr>
									<th class="col-md-4">ID User</th>
									<td>&nbsp;: &nbsp;</td>
									<td> Q123</td>
								</tr>
								<tr>
									<th>Nama Lengkap</th>
									<td>&nbsp;: &nbsp;</td>
									<td> Ilma Yurdianti</td>
								</tr>
								<tr>
									<th> Email</th>
									<td>&nbsp;: &nbsp;</td>
									<td> ilmayurdi354@gmail.com</td>
								</tr>
								<tr>
									<th> No. HP</th>
									<td>&nbsp;: &nbsp;</td>
									<td> 085784747178</td>
								</tr>
								<tr>
									<th> Tempat, Tanggal Lahir</th>
									<td>&nbsp;: &nbsp;</td>
									<td> Magetan, 22 Desember 1996 </td>
								</tr>
								<tr>
									<th> Alamat</th>
									<td>&nbsp;: &nbsp;</td>
									<td> RT. 015 RW 006 Dukuh III Desa Setren Kec. Bendo Kabupaten Magetan</td>
								</tr>
								<tr>
									<th> Alamat Maps</th>
									<td>&nbsp;: &nbsp;</td>
									<td> <a href="http://goo.gle/ttstw"> http://goo.gle/ttstw </a></td>
								</tr>
								<tr>
									<th> Gender</th>
									<td>&nbsp;: &nbsp;</td>
									<td>Perempuan</td>
								</tr>
								<tr>
									<th> Status Approve</th>
									<td>&nbsp;: &nbsp;</td>
									<td>Approved</td>
								</tr>
								<tr>
									<th colspan="2"> <center>Foto Profil</center> </th>
									<th> <center>Foto KTP</center></th>
									</tr>
								<tr>
									<th colspan="2"> <center><img src="images/user.jpg" width="200px" heigth="100px" padding="10px"></center></th>
									<th><center><img src="images/user.jpg" width="200px" heigth="100px" padding="10px"></center></th>
								
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