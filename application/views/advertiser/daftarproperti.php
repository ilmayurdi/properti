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
				<h1 class="page-header">Daftar Properti <a href="#"><button type="button" class="btn btn-lg btn-primary"><i class="fa fa-plus"></i> &nbsp;&nbsp;Tambah Data Properti</button></a></h1>
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
		
		
		
		
		
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>