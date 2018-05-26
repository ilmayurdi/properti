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
				<li><a href="pesancs.php">Daftar Pesan Customer Service</a></li>
				<li class="active">Isi Pesan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><i>Visitor's Username</i></h1>
			</div>
		</div><!--/.row-->

						<div class="panel panel-default chat">
					<div class="panel-heading">
						Chat
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<ul>
							<li class="left clearfix" style="background-color:#e6ffee;"><span class="chat-img pull-left">
								<img src="images/user.jpg" alt="User Avatar" height="70px" width="70px" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header"><strong class="primary-font">John Doe</strong></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
									<small class="text-muted">32 mins ago </small>
								</div>
							</li>
							<li class="right clearfix"><span class="chat-img pull-right">
								<img src="images/user.jpg" alt="User Avatar" height="70px" width="70px" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header"><strong class="pull-right primary-font">Jane Doe</strong> </div>
									<br>
									<p style="text-align:right;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
									<small class="pull-right text-muted">6 mins ago</small>
								</div>
							</li>
							<li class="left clearfix" style="background-color:#e6ffee;"><span class="chat-img pull-left">
								<img src="images/user.jpg" alt="User Avatar" height="70px" width="70px" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header"><strong class="primary-font">John Doe</strong></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
									<small class="text-muted">32 mins ago </small>
								</div>
							</li>
							<li class="right clearfix"><span class="chat-img pull-right">
								<img src="images/user.jpg" alt="User Avatar" height="70px" width="70px" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header"><strong class="pull-right primary-font">Jane Doe</strong> </div>
									<br>
									<p style="text-align:right;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
									<small class="pull-right text-muted">6 mins ago</small>
								</div>
							</li>
							
						</ul>
					</div>
					<div class="panel-footer">
						<div class="input-group">
							<input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." /><span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="btn-chat">Send</button>
						</span></div>
					</div>
				</div>
<?php
	include('footer.php');
?>