<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin | Login</title>
	<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/admin/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/admin/css/styles.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/assets/admin/css/font-awesome.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body style="background-image:url(<?php echo base_url(); ?>assets/admin/images/5.jpg)">
     
	<div class="row">

		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in Admin Proper <i class="fa fa-cubes"></i></div>
				<?php
		        	if (validation_errors() || $this->session->flashdata('result_login')) {
		        ?>
		        <div class="alert bg-danger" role="alert">
		        	<button type="button" class="close" data-dismiss="alert">&times;</button>
		            <strong>Warning!</strong>
		            <?php echo validation_errors(); ?>
		            <?php echo $this->session->flashdata('result_login'); ?>
		        </div>    
		        <?php } ?>
				<div class="panel-body">
					<form role="form" method="post" action="<?php echo base_url('login/proses'); ?>">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password"required>
							</div>	
							<input type="submit"class="btn btn-primary" value="Login">

						</fieldset>
							<div style="text-align:right;">
								<a href="#" style="color:#2fdab8;">Lupa Password ?</a>	
							</div>
							
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
</body>
</html>
